<div class="container">
    <div class="fs-3">Wellcome <span id="username"></span>!, click <button id="logout" class="bg-white border-0 text-primary">here</button> if want logout.</div>

    <section class="mt-4">
        <div class="mb-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah data
            </button>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Product</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Stok</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody id="tr">

            </tbody>
        </table>

        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="First group" id="pagination">

            </div>
        </div>
    </section>

    <section>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form onsubmit="return onSubmit(event)">
                            <div class="mb-3">
                                <label for="nama-barang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama-barang">
                                <div id="nama-barangMsg" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="harga-beli" class="form-label">Harga Beli</label>
                                <input type="number" class="form-control" id="harga-beli">
                                <div id="harga-beliMsg" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="harga-jual" class="form-label">Harga Jual</label>
                                <input type="number" class="form-control" id="harga-jual">
                                <div id="harga-jualMsg" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stok">
                                <div id="stokMsg" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload gambar</label>
                                <input class="form-control" type="file" id="gambar">
                                <div id="gambarMsg" class="form-text text-danger"></div>
                            </div>
                            <button type="button" class="btn btn-primary" id="add-button">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="edit-modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit-modalLabel">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="nama-barang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama-barang-edit" disabled>
                                <div id="nama-barangMsg-edit" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="harga-beli" class="form-label">Harga Beli</label>
                                <input type="number" class="form-control" id="harga-beli-edit">
                                <div id="harga-beliMsg-edit" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="harga-jual" class="form-label">Harga Jual</label>
                                <input type="number" class="form-control" id="harga-jual-edit">
                                <div id="harga-jualMsg-edit" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stok-edit">
                                <div id="stokMsg-edit" class="form-text text-danger"></div>
                            </div>
                            <p>Preview gambar sebelumnya</p>
                            <img src="" id="preview-gambar" class="img-thumbnail mb-3" style="width:10rem">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload gambar</label>
                                <input class="form-control" type="file" id="gambar-edit">
                                <div id="gambarMsg-edit" class="form-text text-danger"></div>
                            </div>
                            <button type="button" class="btn btn-primary" id="edit-button">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="modal-delete-arial" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-delete-arial">Hapus Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Yakin untuk hapus barang?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" id="delete-button-confirm">Hapus barang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header text-bg-success border-0">
                    <strong class="me-auto">System</strong>
                    <small>now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Action successfully
                </div>
            </div>
        </div>
    </section>

</div>



<script type="text/javascript">
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });

    const accessToken = params.token;

    function parseJwt(token) {
        const base64Url = token.split('.')[1];
        const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        const jsonPayload = decodeURIComponent(window.atob(base64).split('').map(function(c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));

        return JSON.parse(jsonPayload);
    };


    const refreshToken = async (accessToken) => {
        try {
            const config = {
                method: 'get',
                url: 'http://localhost:3000/refresh-token',
                headers: {
                    'Content-Type': 'application/json',
                },
                withCredentials: true

            };
            const response = await axios(config)

            if (response.data.status === 403) return window.location.href = 'http://localhost/frontend/';
            if (response.data.status === 200) {
                const {
                    exp,
                    username
                } = parseJwt(response.data.accessToken)

                document.getElementById('username').innerHTML = username

                const getProducts = async (token, page = '') => {
                    try {
                        const config = {
                            method: 'get',
                            url: `http://localhost:3000/products?page=${page}&size=5`,
                            headers: {
                                'authorization': `Bearer ${token}`,
                            },
                            withCredentials: true
                        };

                        const response = await axios(config);

                        if (response.status === 400) return window.location.href = 'http://localhost/frontend/';
                        if (response.status === 403) return window.location.href = 'http://localhost/frontend/';

                        const axiosJWT = axios.create();

                        axiosJWT.interceptors.request.use(async (config) => {
                            const currentDate = new Date();
                            if (exp * 1000 < currentDate.getTime()) {
                                const response = await axios.get('http://localhost:3000/refresh-token');
                                config.headers.Authorization = `Bearer ${response.data.accessToken}`;
                                const decoded = parseJwt(response.data.accessToken);
                                const {
                                    username
                                } = decoded
                            }
                            return config;
                        }, (error) => {
                            return Promise.reject(error);
                        });

                        const data = response.data.data;

                        return data

                    } catch (error) {
                        window.location.href = 'http://localhost/frontend/';
                    }
                }

                const dataTable = (data) => {
                    let tr = ''
                    data.products.forEach((element) => {
                        tr += `<tr>
                            <td><img src="${element.gambar}" class="img-thumbnail" style="width:10rem"></td>
                            <td>${element.nama_barang.split("-").join(" ")}</td>
                            <td>${element.harga_beli}</td>
                            <td>${element.harga_jual}</td>
                            <td>${element.stok}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-edit" class="btn btn-warning" data-bs-whatever="${element.nama_barang}" id="delete-button">Edit</button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-delete" class="btn btn-danger" data-bs-whatever="${element.nama_barang}" id="delete-button">Hapus</button>
                                </div>
                            </td></tr>`
                    });
                    document.getElementById('tr').innerHTML = tr
                }

                const pagination = (data) => {
                    let page = ''
                    for (let index = 0; index < data.totalPages; index++) {
                        page += `<button type="button" class="btn btn-outline-secondary page" value=${index} id="${index}">${index+1}</button>`
                    }
                    document.getElementById('pagination').innerHTML = page
                }

                const getNumPagination = () => {
                    const btnPage = document.querySelectorAll('.page')

                    btnPage.forEach(element => {
                        element.addEventListener('click', async (e) => {
                            const data = await getProducts(response.data.accessToken, e.target.value)
                            dataTable(data)
                            pagination(data)
                            getNumPagination()
                        })
                    })
                }

                const deleteData = (token, getProducts, dataTable, pagination, getNumPagination) => {
                    const modalDel = document.getElementById('modal-delete')
                    const toastLiveExample = document.getElementById('liveToast')

                    modalDel.addEventListener('show.bs.modal', (event) => {

                        const button = event.relatedTarget

                        const namaBarang = button.getAttribute('data-bs-whatever')

                        const deleteBtn = document.getElementById('delete-button-confirm')

                        deleteBtn.addEventListener('click', (e) => {
                            const data = JSON.stringify({
                                "nama_barang": namaBarang
                            });

                            const config = {
                                method: 'delete',
                                url: 'http://localhost:3000/products',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'authorization': `Bearer ${token}`,
                                },
                                data: data
                            };

                            axios(config)
                                .then(async (response) => {
                                    const toast = new bootstrap.Toast(toastLiveExample)

                                    toast.show()
                                    const data = await getProducts(token)
                                    dataTable(data)
                                    pagination(data)
                                    getNumPagination()

                                })
                                .catch(function(error) {

                                });
                        })
                    })
                }

                const findOne = (token, getProducts, dataTable, pagination, getNumPagination) => {
                    const modalEdit = document.getElementById('modal-edit')
                    const toastLiveExample = document.getElementById('liveToast')

                    modalEdit.addEventListener('show.bs.modal', (event) => {

                        const button = event.relatedTarget

                        const namaBarang = button.getAttribute('data-bs-whatever')

                        var config = {
                            method: 'get',
                            url: `http://localhost:3000/products/${namaBarang}`,
                            headers: {
                                'authorization': `Bearer ${token}`,
                            }
                        };

                        axios(config)
                            .then(function(response) {
                                const data = response.data.data[0]
                                document.getElementById('nama-barang-edit').value = data.nama_barang.split("-").join(" ")
                                document.getElementById('harga-beli-edit').value = data.harga_beli
                                document.getElementById('harga-jual-edit').value = data.harga_jual
                                document.getElementById('stok-edit').value = data.stok

                                document.getElementById('preview-gambar').src = data.gambar

                                editBtn = document.getElementById('edit-button')

                                editBtn.addEventListener('click', (e) => {
                                    const namaBarang = document.getElementById('nama-barang-edit').value
                                    const hargaBeli = document.getElementById('harga-beli-edit').value
                                    const hargaJual = document.getElementById('harga-jual-edit').value
                                    const stok = document.getElementById('stok-edit').value
                                    const gambar = document.getElementById('gambar-edit').files[0]

                                    const data = new FormData();
                                    data.append('nama_barang', namaBarang.split(" ").join("-"));
                                    data.append('harga_beli', hargaBeli);
                                    data.append('harga_jual', hargaJual);
                                    data.append('gambar', gambar);
                                    data.append('stok', stok);

                                    const config = {
                                        method: 'put',
                                        url: 'http://localhost:3000/products',
                                        headers: {
                                            'authorization': `Bearer ${token}`,
                                        },
                                        data: data
                                    };

                                    axios(config)
                                        .then(async (response) => {

                                            const toast = new bootstrap.Toast(toastLiveExample)

                                            toast.show()

                                            const data = await getProducts(token)
                                            dataTable(data)
                                            pagination(data)
                                            getNumPagination()
                                            namaBarangMsg.classList.add('visually-hidden');
                                            hargaBeliMsg.classList.add('visually-hidden');
                                            hargaJualMsg.classList.add('visually-hidden');
                                            stokMsg.classList.add('visually-hidden');
                                            gambarMsg.classList.add('visually-hidden');
                                        })
                                        .catch(async (error) => {
                                            try {
                                                const namaBarangMsg = document.getElementById('nama-barangMsg-edit');
                                                const hargaJualMsg = document.getElementById('harga-jualMsg-edit');
                                                const hargaBeliMsg = document.getElementById('harga-beliMsg-edit');
                                                const stokMsg = document.getElementById('stokMsg-edit');
                                                const gambarMsg = document.getElementById('gambarMsg-edit');

                                                namaBarangMsg.classList.add('visually-hidden');
                                                hargaBeliMsg.classList.add('visually-hidden');
                                                hargaJualMsg.classList.add('visually-hidden');
                                                stokMsg.classList.add('visually-hidden');
                                                gambarMsg.classList.add('visually-hidden');


                                                await error.response.data.errors.forEach(element => {

                                                    switch (element.param) {
                                                        case 'nama_barang':
                                                            namaBarangMsg.innerHTML = element.msg
                                                            namaBarangMsg.classList.remove('visually-hidden');
                                                            break;
                                                        case 'harga_jual':
                                                            hargaJualMsg.innerHTML = element.msg

                                                            hargaJualMsg.classList.remove('visually-hidden');
                                                        case 'harga_beli':
                                                            hargaBeliMsg.innerHTML = element.msg
                                                            hargaBeliMsg.classList.remove('visually-hidden');
                                                        case 'stok':
                                                            stokMsg.innerHTML = element.msg
                                                            stokMsg.classList.remove('visually-hidden');
                                                        case 'gambar':
                                                            gambarMsg.innerHTML = element.msg
                                                            gambarMsg.classList.remove('visually-hidden');
                                                        default:
                                                            break;
                                                    }
                                                })
                                            } catch (error) {

                                            }

                                        });
                                })

                            })
                            .catch(function(error) {

                            });

                    })

                }

                const data = await getProducts(response.data.accessToken)
                dataTable(data)
                pagination(data)
                getNumPagination()
                deleteData(response.data.accessToken, getProducts, dataTable, pagination, getNumPagination)
                findOne(response.data.accessToken, getProducts, dataTable, pagination, getNumPagination)

            }
        } catch (error) {
            window.location.href = 'http://localhost/frontend/';
        }
    }

    const addData = (token, getProducts) => {
        const addButon = document.getElementById('add-button')

        addButon.addEventListener('click', (e) => {
            e.preventDefault();

            const namaBarang = document.getElementById('nama-barang').value
            const hargaBeli = document.getElementById('harga-beli').value
            const hargaJual = document.getElementById('harga-jual').value
            const stok = document.getElementById('stok').value
            const gambar = document.getElementById('gambar').files[0]
            const toastLiveExample = document.getElementById('liveToast')

            let data = new FormData();
            data.append('nama_barang', namaBarang);
            data.append('harga_beli', hargaBeli);
            data.append('harga_jual', hargaJual);
            data.append('gambar', gambar);
            data.append('stok', stok);

            var config = {
                method: 'post',
                url: 'http://localhost:3000/products',
                headers: {
                    'authorization': `Bearer ${token}`,
                },
                withCredentials: true,
                data: data
            };

            axios(config)
                .then(function(response) {

                    const toast = new bootstrap.Toast(toastLiveExample)

                    toast.show()

                    getProducts()

                })
                .catch(async (error) => {
                    try {
                        const namaBarangMsg = document.getElementById('nama-barangMsg');
                        const hargaJualMsg = document.getElementById('harga-jualMsg');
                        const hargaBeliMsg = document.getElementById('harga-beliMsg');
                        const stokMsg = document.getElementById('stokMsg');
                        const gambarMsg = document.getElementById('gambarMsg');

                        namaBarangMsg.classList.add('visually-hidden');
                        hargaBeliMsg.classList.add('visually-hidden');
                        hargaJualMsg.classList.add('visually-hidden');
                        stokMsg.classList.add('visually-hidden');
                        gambarMsg.classList.add('visually-hidden');


                        await error.response.data.errors.forEach(element => {

                            switch (element.param) {
                                case 'nama_barang':
                                    namaBarangMsg.innerHTML = element.msg
                                    namaBarangMsg.classList.remove('visually-hidden');
                                    break;
                                case 'harga_jual':
                                    hargaJualMsg.innerHTML = element.msg

                                    hargaJualMsg.classList.remove('visually-hidden');
                                case 'harga_beli':
                                    hargaBeliMsg.innerHTML = element.msg
                                    hargaBeliMsg.classList.remove('visually-hidden');
                                case 'stok':
                                    stokMsg.innerHTML = element.msg
                                    stokMsg.classList.remove('visually-hidden');
                                case 'gambar':
                                    gambarMsg.innerHTML = element.msg
                                    gambarMsg.classList.remove('visually-hidden');
                                default:
                                    break;
                            }
                        })
                    } catch (error) {
                        namaBarangMsg.classList.add('visually-hidden');
                        hargaBeliMsg.classList.add('visually-hidden');
                        hargaJualMsg.classList.add('visually-hidden');
                        stokMsg.classList.add('visually-hidden');
                        gambarMsg.classList.add('visually-hidden');
                    }

                });
        })
    }


    refreshToken(accessToken)
    addData(accessToken, refreshToken)

    const logOutButton = document.getElementById('logout');
    logOutButton.addEventListener('click', e => {
        e.preventDefault();
        var config = {
            method: 'delete',
            url: 'http://localhost:3000/logout',
            withCredentials: true
        };

        axios(config)
            .then(function(response) {

                if (response.data.status === 200) {
                    window.location.href = 'http://localhost/frontend/';
                }
            })
            .catch(function(error) {
                window.location.href = 'http://localhost/frontend/';
            });

    })
</script>