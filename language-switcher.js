// language-switcher.js
document.addEventListener('DOMContentLoaded', function() {
    var languageSwitcher = document.getElementById('language-switcher');
    var currentUrl = window.location.href;

    // Set the initial value of the select element based on the current URL
    if (currentUrl.includes('index_en.php')) {
        languageSwitcher.value = 'en';
    } else {
        languageSwitcher.value = 'bg';
    }

    languageSwitcher.addEventListener('change', function() {
        var language = languageSwitcher.value;
        if (language === 'bg') {
            window.location.href = 'index.php';
        } else if (language === 'en') {
            window.location.href = 'index_en.php';
        }
    });
});
