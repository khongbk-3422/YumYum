
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Selector</title>
    <style>
        * {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  outline: none;
}

body {
  font-family: Open Sans;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  overflow: hidden;
  background: rgb(60, 60, 242);
  background: linear-gradient(
    90deg,
    rgba(60, 60, 242, 1) 0%,
    rgba(98, 245, 230, 1) 52%,
    rgba(60, 60, 242, 1) 100%
  );
  background-size: cover;
}

.mainbox {
  position: relative;
  width: 500px;
  height: 500px;
}
.mainbox:after {
  position: absolute;
  content: "";
  width: 32px;
  height: 32px;
  background: url('download.png') no-repeat;
  background-size: 32px;
  right: -30px;
  top: 50%;
  transform: translateY(-50%);
}
.box {
  width: 100%;
  height: 100%;
  position: relative;
  border-radius: 50%;
  border: 10px solid #fff;
  overflow: hidden;
  transition: all ease 5s;
}
span {
  width: 50%;
  height: 50%;
  display: inline-block;
  position: absolute;
}
.span1 {
  clip-path: polygon(0 92%, 100% 50%, 0 8%);
  background-color: #fffb00;
  top: 120px;
  left: 0;
}
.span2 {
  clip-path: polygon(100% 92%, 0 50%, 100% 8%);
  background-color: #ff4fa1;
  top: 120px;
  right: 0;
}
.span3 {
  clip-path: polygon(50% 0%, 8% 100%, 92% 100%);
  background-color: #ffaa00;
  bottom: 0;
  left: 120px;
}
.span4 {
  clip-path: polygon(50% 100%, 92% 0, 8% 0);
  background-color: #22ff00;
  top: 0;
  left: 120px;
}

.box1 .span3 b {
  transform: translate(-50%, -50%) rotate(-270deg);
}
.box1 .span1 b,
.box2 .span1 b {
  transform: translate(-50%, -50%) rotate(185deg);
}
.box2 .span3 b {
  transform: translate(-50%, -50%) rotate(90deg);
}
.box1 .span4 b,
.box2 .span4 b {
  transform: translate(-50%, -50%) rotate(-85deg);
}

.box2 {
  width: 100%;
  height: 100%;
  transform: rotate(-135deg);
}
span b {
  font-size: 24px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.spin {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 75px;
  height: 75px;
  border-radius: 50%;
  border: 4px solid #fff;
  background-color: #001aff;
  color: #fff;
  box-shadow: 0 5px 20px #000;
  font-weight: bold;
  font-size: 22px;
  cursor: pointer;
}
.spin:active {
  width: 70px;
  height: 70px;
  font-size: 20px;
}

.mainbox.animate:after {
  animation: animateArrow 0.7s ease infinite;
}
@keyframes animateArrow {
  50% {
    right: -40px;
  }
}
    </style>
</head>
<body>
    <h1><center> Restaurant Spin Wheel<br>
    
	<div id="mainbox" class="mainbox">
		<div id="box" class="box">
			<div class="box1">
                @foreach ($restaurants as $r)
                <span class="span1"><b>{{$r}}</b></span>
                @endforeach
				<span class="span1"><b>Iron Man</b></span>
				<span class="span2"><b>7500</b></span>
				<span class="span3"><b>Bat Man</b></span>
				<span class="span4"><b>Joker</b></span>
			</div>
			<div class="box2">
				<span class="span1"><b>Shoplifters</b></span>
				<span class="span2"><b>Inception</b></span>
				<span class="span3"><b>Deadpool</b></span>
				<span class="span4"><b>Terminator</b></span>
			</div>
		</div>

		<button class="spin" onclick="myfunction()">SPIN</button>
	</div>

  
  <script>
    function myfunction() {
  var x = 1024; //min value
  var y = 9999; // max value

  var deg = Math.floor(Math.random() * (x - y)) + y;

  document.getElementById("box").style.transform = "rotate(" + deg + "deg)";

  var element = document.getElementById("mainbox");
  element.classList.remove("animate");
  setTimeout(function () {
    element.classList.add("animate");
  }, 5000); //5000 = 5 second
}

  </script>
</body>
</html>