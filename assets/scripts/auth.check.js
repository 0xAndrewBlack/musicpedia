// DögKút Check Rendszer v1.0

// Account nav
function check() {
	const loggedIn = checkToken();

	if(!loggedIn) {
		document.querySelector('.dropdown-content').insertAdjacentHTML('beforeend', '<a href="./login.html">bejelentkezés</a><a href="./register.html">regisztráció</a>');
		return;
	}
	document.querySelector('.dropdown-content').insertAdjacentHTML('beforeend', '<a href="#">szerkesztés</a><a href="#">kedvenceim</a><a href="javascript:void(0);" onclick="logout()">kijelentkezés</a>');

	const url = location.pathname;
	const filename = url.substring(url.lastIndexOf('/')+1)

	if (filename == 'register.html' || filename == 'login.html') {
		location.href = './index.html';
	}
}
// Check localStorage for existing token
function checkToken() {
	const userToken = localStorage.getItem('token');
	if (!userToken) {
		console.log('🔒 - Nincs belépve felhasználó. 😭');
		return false;
	}

	const validToken = isValidToken(userToken);
	if (!validToken) {
		console.log('🔒 - Nincs belépve felhasználó. 😭');
		return false;
	}

	console.log('🔒 - Emlékszek rád. 😍');
	return true;
}
// Check base64 encoding
function isValidToken(token) {
    if (token === '' || token.trim() === '') return false;

    try {
        return true;
    } catch (e) {
        return false;
    }
}
// Destroy token
function logout() {
	localStorage.removeItem('token');

	alert('🔒 - Kiléptél a gyászba! 🙁');
	console.log('🔒 - Session destroyed. 😔');

	location.reload();
}
// Inital check
check();