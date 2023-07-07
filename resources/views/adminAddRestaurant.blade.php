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
    /* height:550px; */
    background: url('image/adminAddRestaurant1.png') no-repeat;
    background-size:cover;
    background-position:center;
    border-radius:10px;
    margin-top: 45px;
    padding: 40px;
}

.addContainer .addContent{
    /* position:absolute;
    top:0;
    left:0; */
    width:58%;
    /* height:calc(100% - 100px); */
    background:transparent;
    padding:0;
    color:white;
    display:flex;
    justify-content:space-between;
    flex-direction:column;
    z-index: 1;
}
.addContainer .addPanel{
    display: flex;
    flex-grow: 1;
    /* position:absolute;
    top:0; */
    /* left:0; */
    /* width:42%;
    height:100%; */
    overflow: hidden;
    /* border-right-style: solid;
    border-right-color: white; */
}
.addPanel .addInputPanel{
    /* position:absolute; */
    display:flex;
    flex-direction: column;
    /* gap: 10px; */
    /* position: absolute; */
    justify-content: center;
    align-items:center;
    width:100%;
    /* height:100%; */
    background:transparent;
    /* backdrop-filter:blur(10px); */
    /* border-right-style: solid;
    border-right-color: white; */
    border-top-left-radius:10px;
    border-bottom-left-radius:10px;
    /* color:white; */
}
.addPanel .addInputPanel h2 {
    color: white; /* Add a color to the heading text */
}

.addPanel .addInputPanel .btn {
    background-color: #11998e; /* Update the button background color */
    color: white; /* Update the button text color */
    padding: 10px 20px; /* Add some padding */
    border: none;
    cursor: pointer;
    font-size: 1rem;
    border-radius: 5px;
    margin-top: 20px; /* Add some margin to separate from the input fields */
}

.addPanel .addInputPanel .btn:hover {
    background-color: #38ef7d; /* Update the button background color on hover */
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
     box-sizing: border-box;
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
.addContainer .addContent .form__group {
    display: flex;
    flex-direction: column;
}
/* reset input */
 .form__field:required, .form__field:invalid {
	 box-shadow: none;
}
.form__group select option {
    color: black;
}
    </style>
</head>
<body>
    <div class="addBackground"></div>
    <div class="addContainer">
        <div class="addContent">
        </div>
        <div class="addPanel">
            <form action="{{ url('admin_add_rest') }}" method="POST" class="addInputPanel">
                @csrf
                <h2>Add Restaurant</h2>
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Restaurant Name" name="rest_name" id='restaurant name' required />
                    <label for="restaurant name" class="form__label">Restaurant Name</label>
                </div>
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Restaurant Contact" name="rest_contact" id='restaurant contact' required />
                    <label for="restaurant contact" class="form__label">Restaurant Contact</label>
                </div>
                <div class="form__group field">
                    <label for="Restaurant Category" class="form__label">Restaurant Category</label>
                    <select name="rest_category" id="category" class="form__field">
                        <option value="">Select Category</option>
                        <option value="Italian">Italian</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Malaysian">Malaysian</option>
                        <option value="Steakhouse">Steakhouse</option>
                        <option value="Thai">Thai</option>
                    </select>
                </div>
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Restaurant Address" name="rest_address" id='restaurant address' required />
                    <label for="restaurant address" class="form__label">Restaurant Address</label>  
                </div>
                <div class="form__group field">
                    <input type="number" class="form__field" placeholder="Minimum Price" name="price_min" id='min' required />
                    <label for="min" class="form__label">Minimum Price</label>
                </div>
                <div class="form__group field">
                    <input type="number" class="form__field" placeholder="Max Price" name="price_max" id='max' required />
                    <label for="max" class="form__label">Maximum Price</label>
                </div>
                <button type="submit" class="btn">Add</button>
            </form>
        </div>
    </div>
</body>
@if(Session::has('rest_name_error'))
    <script>
        alert("{{ Session::get('rest_name_error') }}");
    </script>
@endif
@if(Session::has('rest_contact_error'))
    <script>
        alert("{{ Session::get('rest_contact_error') }}");
    </script>
@endif
@if(Session::has('rest_category_error'))
    <script>
        alert("{{ Session::get('rest_category_error') }}");
    </script>
@endif
@if(Session::has('rest_address_error'))
    <script>
        alert("{{ Session::get('rest_address_error') }}");
    </script>
@endif
@if(Session::has('price_min_error'))
    <script>
        alert("{{ Session::get('price_min_error') }}");
    </script>
@endif
@if(Session::has('price_max_error'))
    <script>
        alert("{{ Session::get('price_max_error') }}");
    </script>
@endif
</html>
