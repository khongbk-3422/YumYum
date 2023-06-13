const loginPanel = document.querySelector(
    '.loginPanel');
const loginLink = document.querySelector(
    'loginLink');
const registerLink = document.querySelector(
    'registerLink');

registerLink.addEventListener(
    'click', () => {
        loginPanel.classList.add('active');
    });

loginLink.addEventListener(
    'click', () => {
        loginPanel.classList.remove('active');
    });