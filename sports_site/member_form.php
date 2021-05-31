<!doctype html>
<html lang="kr">
	<head>
	<meta charset="UTF-8">
	<title>Login</title>

<style rel="stylesheet">

.overlay, .form-panel.one:before {
  position: absolute;
  top: 0;
  left: 0;
  display: none;
  background: rgba(0, 0, 0, 0.8);
  width: 100%;
  height: 100%;
}

.form {
  z-index: 15;
  position: relative;
  background: #FFFFFF;
  width: 600px;
  border-radius: 4px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
  margin: 100px auto 10px;
  overflow: hidden;
}

.form-group {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: 0 0 20px;
}
.form-group:last-child {
  margin: 0;
}
.form-group label {
  display: block;
  margin: 0 0 10px;
  color: rgba(0, 0, 0, 0.6);
  font-size: 12px;
  font-weight: 500;
  line-height: 1;
  text-transform: uppercase;
  letter-spacing: .2em;
}

.form-group input {
  outline: none;
  display: block;
  background: rgba(0, 0, 0, 0.1);
  width: 100%;
  border: 0;
  border-radius: 4px;
  box-sizing: border-box;
  padding: 12px 20px;
  color: rgba(0, 0, 0, 0.6);
  font-family: inherit;
  font-size: inherit;
  font-weight: 500;
  line-height: inherit;
  -webkit-transition: 0.3s ease;
          transition: 0.3s ease;
}
.form-group input:focus {
  color: rgba(0, 0, 0, 0.8);
}
.form-group button {
  outline: none;
  background: #4285F4;
  width: 100%;
  border: 0;
  border-radius: 4px;
  padding: 12px 20px;
  color: #FFFFFF;
  font-family: inherit;
  font-size: inherit;
  font-weight: 500;
  line-height: inherit;
  text-transform: uppercase;
  cursor: pointer;
}

.form-group .form-remember {
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 0;
  text-transform: none;
}
.form-group .form-remember input[type='checkbox'] {
  display: inline-block;
  width: auto;
  margin: 0 10px 0 0;
}
.form-group .form-recovery {
  color: #4285F4;
  font-size: 12px;
  text-decoration: none;
}
.form-panel {
  padding: 60px calc(5% + 60px) 60px 60px;
  box-sizing: border-box;
}
.form-panel.one:before {
  content: '';
  display: block;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.3s ease;
          transition: 0.3s ease;
}
.form-panel.one.hidden:before {
  display: block;
  opacity: 1;
  visibility: visible;
}

.form-header {
  margin: 0 0 40px;
}
.form-header h1 {
  padding: 4px 0;
  color: #000;
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
}

</style>
</head>
<body>

  <?php include "header.php"?>
<!-- Form-->
<div class="form">

  <div class="form-panel one">
    <div class="form-header">
      <h1>Sign up</h1>
    </div>
    <div class="form-content">
      <form>
        <div class="form-group">
          <label for="username">UserId</label>
          <input type="text" id="username" name="username" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">Password re- enter</label>
          <input type="password" id="password" name="password" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">E-mail</label>
          <input type="email" id="password" name="password" required="required"/>
        </div>
        <div class="form-group">
          <label for="username">Tel</label>
          <input type="tel" id="username" name="username" required="required"/>
        </div>
        <div class="form-group">
            <label for ="hobby"> Hobby </label>
        <label class="form-remember">
            <input type="checkbox"/>soccer
            &nbsp&nbsp<input type="checkbox"/>BaseBall
            &nbsp&nbsp<input type="checkbox"/>BasketBall

          </label>
          <div class="form-group">
          <label for="password">Career(없으면 입력 x)</label>
          <input type="password" id="password" name="password" required="required"/>
        </div>
        </div>
        <div class="form-group">
          <button type="submit">Register</button>
        </div>

        
      </form>
    </div>
  </div>
  </div>
</div>