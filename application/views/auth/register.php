<div class="container">
    <label class="fs-3 mt-3">Register</label>
    <form class="mt-2" style="width: 25rem" id="form">
        <div class="alert alert-success my-2 visually-hidden" role="alert" id="alert">
            Account successfuly created
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="username">
            <div id="usernameMsg" class="form-text text-danger"></div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password">
            <div id="passwordMsg" class="form-text text-danger"></div>
        </div>

        <button id="submit" type="submit" class="btn btn-primary">Register</button>
    </form>
    <div class="col">
        <div class="row mt-2">
            <a href="<?= base_url(); ?>login">Back</a>
        </div>
    </div>
</div>

<script type="text/javascript">
    const button = document.getElementById('submit');

    button.addEventListener('click', async (e) => {
        e.preventDefault();
        const usernameMsg = document.getElementById('usernameMsg');
        const passwordMsg = document.getElementById('passwordMsg');
        const alert = document.getElementById('alert');
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        button.classList.add('spinner-grow');

        usernameMsg.classList.add('visually-hidden');
        passwordMsg.classList.add('visually-hidden');
        alert.classList.add('visually-hidden');


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
                redirect: 'follow'
            };

            const response = await fetch("http://localhost:3000/register", requestOptions);
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

            if (data.status === 200) {
                usernameMsg.classList.add('visually-hidden');
                passwordMsg.classList.add('visually-hidden');
                button.classList.remove('spinner-grow');
                document.getElementById('alert').classList.remove('visually-hidden');
            }
        } catch (error) {
            console.info(error);
        }

    })
</script>