function filterTable() {
    var input = document.getElementById("searchInput");
    var filter = input.value.toUpperCase();
    var table = document.getElementById("langTable");
    var tr = table.getElementsByTagName("tr");
    for (var i = 1; i < tr.length; i++) {
        var tdKey = tr[i].getElementsByTagName("td")[0];
        var tdOrig = tr[i].getElementsByTagName("td")[1];
        if (tdKey || tdOrig) {
            var txtValueKey = tdKey.textContent || tdKey.innerText;
            var txtValueOrig = tdOrig.textContent || tdOrig.innerText;
            if (txtValueKey.toUpperCase().indexOf(filter) > -1 || txtValueOrig.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {

    // handle typing in textarea
    const textareas = document.querySelectorAll('.definition-input');
    textareas.forEach(function(textarea) {
        textarea.addEventListener('input', function() {
            const key = this.getAttribute('data-key');
            const checkbox = document.getElementById('default_cb_' + key);
            const wrapper = document.getElementById('wrapper_' + key);

            if (checkbox) {
                checkbox.checked = false;
                wrapper.classList.remove('is-default');
            }
        });
    });

    // handle clicking checkbox
    const checkboxes = document.querySelectorAll('.default-checkbox');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const key = this.getAttribute('data-key');
            const wrapper = document.getElementById('wrapper_' + key);

            if (this.checked) {
                wrapper.classList.add('is-default');
            } else {
                wrapper.classList.remove('is-default');
            }
        });
    });
});
