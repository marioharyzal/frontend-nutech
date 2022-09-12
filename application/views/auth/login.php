<div class="container">
    <label class="fs-3 mt-3">Login</label>
    <form class="mt-2" style="width: 25rem">
        <div class="alert alert-warning my-2 visually-hidden" role="alert" id="alert">
            Please check your username or password correctfully
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="email" class="form-control" id="username">
            <div id="usernameMsg" class="form-text text-danger"></div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
            <div id="passwordMsg" class="form-text text-danger"></div>
        </div>

        <button id="submit" type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="col">
        <div class="row mt-2">
            <p>Not have account? <a href="<?= base_url(); ?>register">Register</a></p>
        </div>
    </div>
</div>

<script type="text/javascript">
    const button = document.getElementById('submit');

    button.addEventListener('click', async (e) => {
        e.preventDefault();
        const usernameMsg = document.getElementById('usernameMsg');
        const passwordMsg = document.getElementById('passwordMsg');
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const alert = document.getElementById('alert');

        alert.classList.add('visually-hidden')
        button.classList.add('spinner-grow');
        usernameMsg.classList.add('visually-hidden');
        passwordMsg.classList.add('visually-hidden');


        try {
            const myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            const raw = JSON.stringify({
                "username": username,
                "password": password
            });

            const requestOptions = {
                method: 'POST',
                headers: myHeaders,
                body: raw,
                redirect: 'follow',
                credentials: 'include'
            };

            const response = await fetch("http://localhost:3000/authentication", requestOptions);
            const data = await response.json();

            if (data['errors']) {
                usernameMsg.classList.add('visually-hidden');
                passwordMsg.classList.add('visually-hidden');

                button.classList.remove('spinner-grow')
                return data['errors'].forEach(element => {
                    console.info(element)
                    switch (element.param) {
                        case 'username':
                            document.getElementById('usernameMsg').innerHTML = element.msg
                            usernameMsg.classList.remove('visually-hidden');
                            break;
                        case 'password':
                            document.getElementById('passwordMsg').innerHTML = element.msg
                            passwordMsg.classList.remove('visually-hidden');
                            break;
                        default:
                            break;
                    }
                });
            }

            if (data.status === 400) {
                document.getElementById('alert').classList.remove('visually-hidden');
                usernameMsg.classList.add('visually-hidden');
                passwordMsg.classList.add('visually-hidden');
                button.classList.remove('spinner-grow');
            }

            if (data.status === 200) {
                let x = document.cookie;
                usernameMsg.classList.add('visually-hidden');
                passwordMsg.classList.add('visually-hidden');
                button.classList.remove('spinner-grow');

                const url = `http://localhost/frontend/dashboard?token=${data.accessToken}`;
                window.location.href = url;
            }
        } catch (error) {
            button.classList.remove('spinner-grow');
            console.info(error);
        }

    })
</script>