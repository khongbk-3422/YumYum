const loginPanel = document.querySelector('.loginPanel');
const login_link = document.querySelector('.loginLink');
const register_link = document.querySelector('.registerLink');

register_link.addEventListener('click', () => {
    loginPanel.classList.add('active');
});

login_link.addEventListener('click', () => {
    loginPanel.classList.remove('active');
});
