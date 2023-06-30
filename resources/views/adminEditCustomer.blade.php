@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managing Customer</title>
    @include('cdn')

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
        }

        body{
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.05);
            margin-top: 80px;
        }

        main{
            width: 100%;
            margin: 0 auto;
            display: grid;
            grid-gap: 5rem;
            grid-template-columns: 65% auto;
        }

        .title{
            display: flex;
            margin-bottom: 15px;
            justify-content: space-between;
            align-items: center;
        }

        .search-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .title .search-container input[type=text] {
            padding: 6px;
            border: none;
            font-size: 17px;
            height: 40px;
            border-radius: 20px;
            box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.08);
        }

        .search-container i.fa-search {
            position: absolute;
            right: 10px;
            color: #999;
            cursor: pointer;
        }

        .list{
            padding: 3rem;
        }

        .line{
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 1rem;
            cursor: pointer;
            transition: all 0.3s;
            background: #f2e9bb;
            border-radius: 10px;
            box-shadow: 0 0 0.8rem rgba(0, 0, 0, 0.3);
        }

        .line:hover{
            transform: translateY(-2px);
        }

        .line p{
            font-size: 0.8rem;
            color: rgba(162,162,162);
            margin-bottom: 0.2rem;
        }

        .line img{
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            object-fit: cover;
        }

        .line .details{
            margin-left: 1.5rem;
        }

        .line h6{
            font-size: 1rem;
            color: #111;
            margin-bottom: 0.5rem;
        }

        .line .icon{
            display: flex;
        }

        .icon span{
            display: block;
            width: 0.35rem;
            height: 0.35rem;
            border-radius: 50%;
            background-color: rgba(14,131,214);
            margin: 0.2rem 0;
        }     

        .form{
            box-sizing: border-box;
            width: 400px;
            height: 500px;
            border: 2px solid #b5b3a7;
            box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            background-color: #ebdd83;
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: flex-start;
            position: fixed;
            top: 80px;
            left: 93%;
            transform: translateX(-93%);
        }

        .input-group mb-3{
            margin-top: 20px;
            width: 150px;
        }

        .form img{
            box-sizing: border-box;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-top: 20px;
            border: 5px solid #b5b3a7;
            padding: 3px;
            background-color: white;
        }

        .form .name,
        .form .email,
        .form .phone {
            display: flex;
            align-items: center;
            box-sizing: border-box;
            background: none;
            color: black;
            margin-bottom: 10px;
            padding: 4px;
            width: 350px;
            height: 32px;
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            font-size: 15px;
            margin-top: 10px;
            margin-left: -20px;
        }
        
        .form .name h6,
        .form .email h6,
        .form .phone h6 {
            margin: 0;
            margin-right: 10px;
        }

        .form .name input,
        .form .email input,
        .form .phone input {
            margin-top: 0; 
            width: 300px;
        }

        .form .name{
            margin-top: 20px;
        }

        input[type="text"],
        input[type="email"]{
            margin-left: 50px;
        }

        .form button {
            border: 1px solid #b5b3a7;
            background-color: white;
            color: black;
            padding: 2px 5px;
            height: 30px;
            width: 100px;
            border-radius: 5px;
            transition: all 0.3s;
            margin-top: 20px;
        }

        .form button:hover {
            transform: scale(1.1);
        }

        input[type="file"]{
            display: none;
        }

        label{
            box-sizing: border-box;
            font-size: 20px;
            background-color: black;
            color: white;
            border: 1px solid #3498db;
            padding: 2px 15px;
            border-radius: 5px;
            transition: all 0.3s;
            cursor: pointer;
        }

        label:hover {
            background-color: #3498db;
            color: black;
        }

        @media (max-width: 768px) {
            .container{
                display: flex;
                flex-direction: column;
                align-items: stretch;
            }

            main {
                grid-template-columns: 1fr;
            }

            .list {
                flex-grow: 1;
            }

            .form {
                position: relative;
                top: -100px;
                left: 65px;
                transform: initial;
            }

        }

    </style>
</head>
<body>
    <div class="container">
        <main>
            <div class="list">
                <div class="title">
                    <h1>Customer Information</h1>
                    <div class="search-container">
                        <input type="text" id="searchInput" placeholder="Search..">
                        <i class="fa-solid fa-search"></i>
                    </div>
                </div>
                @foreach ($cust_datas as $cust_data)

                <div class="line" data-customer-id="{{$cust_data['cust_id']}}">
                    <img src="data:image/[image_format];base64,{{ $cust_data['cust_pic'] }}">
                    <div class="name">
                        <h6>{{$cust_data['cust_name']}}</h6>
                    </div>
                    <div class="email">
                        <p>{{$cust_data['user_email']}}</p>
                    </div>
                    <div class="contact">
                        <p>{{$cust_data['cust_contact']}}</p>
                    </div>
                    <div class="action">
                        <div class="icon">
                            <a href="#" class="delete-icon">
                                <i class="fa-solid fa-user-slash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>

            <div class="form">
                <div class="id">
                    <input type="hidden" id="customerId" >
                </div>

                <img id="customerImage" src="" alt="">

                <div class="input-group mb-3">    
                    <label class="input-group-text" for="customerImageSrc"> Upload </label>
                    <input type="file" class="form-control" id="customerImageSrc" >
                </div>
                /* I also dun know why this input doesn't display the back part */

                <div class="name">
                    <h6>Name</h6>
                    <input type="text"  id="customerName" class="form-control" placeholder="Name" aria-label="Username">
                </div>

                <div class="email">
                    <h6>Email</h6>
                    <input type="email" id="customerEmail" class="form-control" placeholder="Email" aria-label="Email">
                </div>

                <div class="phone">
                    <h6>Contact</h6>
                    <input type="text" id="customerContact" class="form-control" placeholder="Contact Number" aria-label="Contact Number">
                </div>

                <div class="button">
                    <button class="updatebtn">UPDATE</button>
                </div>
            </div>
        </main>
    </div>
    <script>

    </script>
</body>

<script>
    // get the data into form when a line of customer's data is selected
    const lines = document.getElementsByClassName('line');

    for (let i = 0; i < lines.length; i++){
        lines[i].addEventListener('click', handleClick);
    }

    function handleClick(event){
        const line = event.currentTarget;
        const customerId = line.dataset.customerId;
        const customerImageSrc = line.querySelector('img').src;
        const customerName = line.querySelector('.name h6').textContent;
        const customerEmail = line.querySelector('.email p').textContent;
        const customerContact = line.querySelector('.contact p').textContent;

        document.getElementById('customerId').value = customerId;
        document.getElementById('customerImage').src = customerImageSrc;
        document.getElementById('customerName').value = customerName;
        document.getElementById('customerEmail').value = customerEmail;
        document.getElementById('customerContact').value = customerContact;
    }

    // pop out the confim window + update the modified data
    const confirmButton = document.querySelector('.updatebtn');
    confirmButton.addEventListener('click', handleConfirm);

    function handleConfirm() {
        const customerId = document.getElementById('customerId').value;
        const customerName = document.getElementById('customerName').value;
        const customerEmail = document.getElementById('customerEmail').value;
        const customerContact = document.getElementById('customerContact').value;

        const confirmMessage = `Are you sure you want to modify the data for this customer?`;

        if (confirm(confirmMessage)) {

        }
    }

    // delete customer's information
    const deleteIcons = document.getElementsByClassName('delete-icon');

    for (let i = 0; i < deleteIcons.length; i++){
        deleteIcons[i].addEventListener('click', handleDelete);
    }

    function handleDelete(event){
        event.preventDefault();
        
        const line = event.currentTarget.closest('.line');
        const customerId = line.dataset.customerId;

        const confirmDelete = confirm("Are you sure you want to delete this customer?");

        if (confirmDelete) {

        }

        else{

        }
    }

    // search function
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', handleSearch);

    function handleSearch() {
        const searchText = searchInput.value.toLowerCase();
        const lines = document.getElementsByClassName('line');

        for (let i = 0; i < lines.length; i++) {
            const line = lines[i];
            const name = line.querySelector('.name h6').textContent.toLowerCase();
            const email = line.querySelector('.email p').textContent.toLowerCase();
            const contact = line.querySelector('.contact p').textContent.toLowerCase();

            if (
            name.includes(searchText) ||
            email.includes(searchText) ||
            contact.includes(searchText)
            ) {
            line.style.display = 'flex';
            } else {
            line.style.display = 'none';
            }
        }
    }

    // document.addEventListener('DOMContentLoaded', function() {
    //     var urlParams = new URLSearchParams(window.location.search);
    //     var customerId = document.getElementById('customerId').value;

    //     // Fetch customer data from the server using AJAX or fetch API
    //     fetch('http://localhost:8000/adminEditCustomer?customerId=' + customerId)
    //         .then(response => response.json())
    //         .then(data => {
    //             // Populate the input fields with the customer data
    //             document.getElementById('customerName').value = data.customerName;
    //             document.getElementById('customerEmail').value = data.customerEmail;
    //             document.getElementById('customerContact').value = data.customerContact;

    //             // Update the image source if available
    //             document.getElementById('customerImage').src = data.customerImageSrc;
    //         })
    //         .catch(error => console.log(error));
    //     });


</script>
</html>