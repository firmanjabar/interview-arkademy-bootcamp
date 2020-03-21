usernameCheck = (username) => console.log(`${username}: ${/^[a-z]{5,7}$/.test(username)}`);

function passwordCheck(pass) {
    const regex = /^[a-zA-Z0-9@]{9}$/;
    console.log(`${pass}: ${regex.test(pass)}`);
}

usernameCheck("diandra");
usernameCheck("Ebi");
passwordCheck("Kint4m@ni");
passwordCheck("p@ssW0rd!");