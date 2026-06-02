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
    // use .closest() to find the specific checkbox for this text area
    const textareas = document.querySelectorAll('.definition-input');
    textareas.forEach(function(textarea) {
        textarea.addEventListener('input', function() {
            const wrapper = this.closest('.textarea-wrapper');
            if (wrapper) {
                const checkbox = wrapper.querySelector('.default-checkbox');
                if (checkbox) {
                    checkbox.checked = false;
                    wrapper.classList.remove('is-default');
                }
            }
        });
    });

    // handle clicking checkbox
    const checkboxes = document.querySelectorAll('.default-checkbox');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const wrapper = this.closest('.textarea-wrapper');
            if (wrapper) {
                if (this.checked) {
                    wrapper.classList.add('is-default');
                } else {
                    wrapper.classList.remove('is-default');
                }
            }
        });
    });

    // JSON payload submit (bypass max_input_vars)
    // ---------------------------------------------
    // On form submit, gather all definitions and checkboxes into a single JSON payload,
    // Base64 encode it, and inject into a hidden field for submission.
    // This prevents issues with large forms exceeding server limits.
    // ---------------------------------------------
    const form = document.querySelector('form[name="languageUpdate"]');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            let payload = {
                definitions: {},
                use_default: {}
            };

            document.querySelectorAll('.definition-input').forEach(function(el) {
                let key = el.getAttribute('data-key');
                payload.definitions[key] = el.value;
                // IMPORTANT: remove 'name' so these fields are NOT sent individually.
                el.removeAttribute('name');
            });

            document.querySelectorAll('.default-checkbox').forEach(function(el) {
                if (el.checked) {
                    let key = el.getAttribute('data-key');
                    payload.use_default[key] = '1';
                }
                el.removeAttribute('name');
            });

            const jsonString = JSON.stringify(payload);

            const base64Payload = btoa(unescape(encodeURIComponent(jsonString)));

            const hiddenField = document.getElementById('json_payload');
            if (hiddenField) {
                hiddenField.value = base64Payload;
                form.submit();
            } else {
                console.error('Fatal Error: #json_payload hidden input missing');
            }
        });
    }
});
