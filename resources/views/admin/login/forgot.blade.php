<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <style media="screen">
    * {
padding: 0;
margin: 0;
box-sizing: border-box;
}

body {
font-family: sans-serif;
display: flex;
align-items: center;
justify-content: center;
min-height: 100vh;
background: #0c0116;
}

.form {
position: relative;
padding: 60px 15px;
width: 270px;
height: 350px;
background: #0c0116;
overflow: hidden;
box-shadow: 0px 0px 10px 0px rgb(116, 119, 114);
border-radius: 5px;
}

.form-inner {
position: absolute;
height: 98%;
width: 98%;
top: 50%;
left: 50%;
background: #0c0116;
transform: translate(-50%, -50%);
}

.content {
height: 100%;
width: 100%;
padding: 25px;
}
.form-inner h2 {
font-size: 25px;
color: #d7a3d7;
text-align: center;
padding-top: 35px;
}
.input {
display: block;
padding: 12px 15px;
width: 100%;
left: 50%;
border-radius: 10px;
margin-top: 20px;
border: 1.5px solid rgb(109, 87, 121);
outline: none;
background: #19052c;
color: white;
}

.btn {
cursor: pointer;
color: white;
margin-top: 22px;
width: 100%;
padding: 7px;
outline: none;
background: #800080;
border: none;
font-size: 14px;
border-radius: 4px;
transition: 0.4s;
}
.btn:hover {
background: #c907c9;
}

.form span {
position: absolute;
height: 50%;
width: 50%;

}

.form span:nth-child(1) {
background: #ffda05;
top: 0;
left: -48%;
animation: 5s span1 infinite linear;
animation-delay: 1s;
}
.form span:nth-child(2) {
background: #00a800;
bottom: 0;
right: -48%;
animation: 5s span2 infinite linear;
}
.form span:nth-child(3) {
background: #800080;
right: -48%;
top: 0px;
animation: 5s span3 infinite linear;
}
.form span:nth-child(4) {
background: #ff0000;
bottom: 0;
right: -48%;
animation: 5s span4 infinite linear;
animation-delay: 1s;
}

@keyframes span1 {
0% {
  top: -48%;
  left: -48%;
}
25% {
  top: -48%;
  left: 98%;
}
50% {
  top: 98%;
  left: 98%;
}
75% {
  top: 98%;
  left: -48%;
}
100% {
  top: -48%;
  left: -48%;
}
}
@keyframes span2 {
0% {
  bottom: -48%;
  right: -48%;
}
25% {
  bottom: -48%;
  right: 98%;
}
50% {
  bottom: 98%;
  right: 98%;
}
75% {
  bottom: 98%;
  right: -48%;
}
100% {
  bottom: -48%;
  right: -48%;
}
}
@keyframes span3 {
0% {
  top: -48%;
  left: -48%;
}
25% {
  top: -48%;
  left: 98%;
}
50% {
  top: 98%;
  left: 98%;
}
75% {
  top: 98%;
  left: -48%;
}
100% {
  top: -48%;
  left: -48%;
}
}

@keyframes span4 {
0% {
  bottom: -48%;
  right: -48%;
}
25% {
  bottom: -48%;
  right: 98%;
}
50% {
  bottom: 98%;
  right: 98%;
}
75% {
  bottom: 98%;
  right: -48%;
}
100% {
  bottom: -48%;
  right: -48%;
}
}
.forgot{
    color: #fff;
    font-size: 12px;
    float: right;
    margin-top: 10px;
    text-decoration: none;
}

    </style>
    <title>Reset Password</title>
  </head>
  <body>
    <form action="" class="form">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <div class="form-inner">
        <h2>Reset Password</h2>
        <div class="content">
          <input class="input" type="email" placeholder="Email" />
          <!-- <input class="input" type="password" placeholder="Password" /> -->
          <button class="btn">Send Password Reset</button>
          <a href="{{url('/')}}" class="forgot">Login Back</a></div>
      </div>
    </form>
  </body>
</html>
