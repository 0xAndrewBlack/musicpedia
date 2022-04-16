// DögKút Auth Rendszer v2.0

function checkDatabase() {
	const db = localStorage.getItem('db');

	if (!db) {
		localStorage.setItem('db', JSON.stringify([]));
		console.log('🔒 - Hiányzó "adatbázis", új üres változat létrehozva. 😑');
	}

	console.log('🔒 - Adatbázis kapcsolat létrejött. 😎');
};
// Check localStorage for existing token
function checkLogin() {
	const user = localStorage.getItem('token');

	if (!user) {
		console.log('🔒 - Nincs belépve felhasználó. 😭');
		return false;
	}

	console.log('🔒 - Emlékszek rád. 😍');
	return true;
}
// Bejelentkezés
function login(e) {
	e.preventDefault();

	try {
		const email = document.querySelector('#mail').value;
		const password = document.querySelector('#password').value;

		if (!email || !password) return;

		const exists = JSON.parse(localStorage.getItem('db')).some(data => data.mail == email);
		const user = JSON.parse(localStorage.getItem('db')).some(data => data.mail == email && retrieve(data.password) == password);

		if (!exists) {
			return alert('🔒 - Nem létezik ilyen felhasználó! 😯');
		}

		if (!user) {
			return alert('🔒 - Hibás adatok! 🤐');
		}

		storeToken(email);

		alert('🔒 - Sikeres bejelentkezés. 😄');
		console.log('🔒 - Sikeres bejelentkezés. 😄');

		location.reload();
	} catch (e) {
		alert('🔒 - Nem létezik ilyen felhasználó!');
		console.log(`🔒 - Hiba (fogadni merek hülyeséget írtál be 🙄), ${e.message}`);
	}
}
// Regisztráció
function register(e) {
	e.preventDefault();

	const email = document.querySelector('#mail').value;
	const password = document.querySelector('#password').value;
	const confirmpassword = document.querySelector('#confirmpassword').value;

	const keresztNev = document.querySelector('#keresztnev').value;
	const vezetekNev = document.querySelector('#vezeteknev').value;
	const szulDatum = document.querySelector('#szuldatum').value;

	if (!email || !password || !confirmpassword || !keresztNev || !vezetekNev) return;

	let database = JSON.parse(localStorage.getItem('db'));
    const user = JSON.parse(localStorage.getItem('db')).some(data => data.mail.toLowerCase() == email.toLowerCase());

	if (user) {
		return alert('🔒 - Létezik már ilyen felhasználó! 😯');
	}

	if (password != confirmpassword) {
		return alert('🔒 - Nem egyező jelszavak! 😶');
	}

	const hashedPassword = hash(password);

	const userObj = {
		mail: email,
		password: hashedPassword,
		name: {
			firstname: keresztNev,
			lastname: vezetekNev,
		},
		birth: szulDatum ? szulDatum : null,
	};
	database.push(userObj);

    localStorage.setItem('db', JSON.stringify(database));

	alert('🔒 - Sikeres regisztráció. 😄');
	console.log('🔒 - Sikeres regisztráció. 😄');

	location.reload();
	location.href = './login.html';
}
// "Hash"
function hash(pw) {
	return btoa(pw);
}
// "Unhash"
function retrieve(pw) {
	return atob(pw);
}
// Store auth
function storeToken(email) {
	localStorage.setItem('token', btoa(email));
}
// Initial check
checkDatabase();