@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Add Restaurant</title>
    @include('cdn')
    <style>
.addBackground{
    background: url('image/adminAddRestaurant1.png') no-repeat;
    width:100%;
    height:100vh;
    background-size:cover;
    background-position:center;
    filter:blur(5px);        
}

.addContainer{
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    width:75%;
    height:550px;
    background: url('image/adminAddRestaurant1.png') no-repeat;
    background-size:cover;
    background-position:center;
    border-radius:10px;
}

.addContainer .addContent{
    position:absolute;
    top:0;
    left:0;
    width:58%;
    height:calc(100% - 160px);
    background:transparent;
    padding:40px;
    color:white;
    display:flex;
    justify-content:space-between;
    flex-direction:column;
}
.addContainer .addPanel{
    position:absolute;
    top:0;
    left:0;
    width:calc(100% - 65%);
    height:100%;
    overflow: hidden;
    border-right-style: solid;
    border-right-color: white;
}
.addPanel .addInputPanel{
    position:absolute;
    display:flex;
    justify-content: center;
    align-items:center;
    width:90%;
    height:50px;
    background:transparent;
    /* backdrop-filter:blur(10px); */
    /* border-right-style: solid;
    border-right-color: white; */
    border-top-left-radius:10px;
    border-bottom-left-radius:10px;
    /* color:white; */
}
.form__group {
	 position: relative;
	 padding: 15px 0 0;
	 margin-top: 10px;
	 width: 100%;
}
 .form__field {
	 font-family: inherit;
	 width: 100%;
	 border: 0;
	 border-bottom: 2px solid #9b9b9b;
	 outline: 0;
	 font-size: 1.3rem;
	 color: #fff;
	 padding: 7px 0;
	 background: transparent;
	 transition: border-color 0.2s;
}
 .form__field::placeholder {
	 color: transparent;
}
 .form__field:placeholder-shown ~ .form__label {
	 font-size: 1.3rem;
	 cursor: text;
	 top: 20px;
}
 .form__label {
	 position: absolute;
	 top: 0;
	 display: block;
	 transition: 0.2s;
	 font-size: 1rem;
	 color: #9b9b9b;
}
 .form__field:focus {
	 padding-bottom: 6px;
	 font-weight: 700;
	 border-width: 3px;
	 border-image: linear-gradient(to right, #11998e, #38ef7d);
	 border-image-slice: 1;
}
 .form__field:focus ~ .form__label {
	 position: absolute;
	 top: 0;
	 display: block;
	 transition: 0.2s;
	 font-size: 1rem;
	 color: #11998e;
	 font-weight: 700;
}
/* reset input */
 .form__field:required, .form__field:invalid {
	 box-shadow: none;
}
/* demo */
 body {
	 font-family: 'Poppins', sans-serif;
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
	 min-height: 100vh;
	 font-size: 1.5rem;
	 background-color: #222;
}
 
    </style>
</head>
<body>
    <div class="addBackground"></div>
    <div class="addContainer">
        <div class="addContent"></div>
        <div class="addPanel">
            <div class="addInputPanel">
                <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
                    <label for="name" class="form__label">Name</label>
            </div>
        </div>
    </div>
</body>
</html>