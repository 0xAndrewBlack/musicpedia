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
	try {
		if (token === '' || token.trim() === '') return false;

		const dToken = atob(token);
		const valid = JSON.parse(localStorage.getItem('db')).some(d => d.mail == dToken);

		if(!valid) {
			throw new Error('🔒 - Token megmásítás!');
		}

        return true;
    } catch (e) {
		if (!e) {
			return false;
		}

		console.log('🔒 - Token megmásítás!');
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