<!DOCTYPE html>
<html>
<head>
	<title>Vue.js Project Setup - Vue.js 2.0 Fundamentals</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1 class="spaceAround">Vue.js Examples</h1>
	</div>
	<div class="container">
	  <div class="row">
	    <div id="showx" class="col-md-8">
	    	<button v-on:click="show = !show" class="spaceAround">click me!!!</button>
			It will show/hide
			<div v-if="show" class="grey">
				<!-- Start -->
				<div id="app">
					<button v-on:click="message= 'changed the message'" class="spaceAround">Change message</button>
					<button v-on:click="changeMessage" class="spaceAround">Change message with the help of a function</button>
					<h1>{{message}}</h1>
					<h1 v-text="message"></h1>
				</div>
				<div id="app-2">
					<button v-if="show" class="spaceAround">
						app-2 Id show
					</button>
				</div>
				<div id='list'>
					<ul>
						<li v-for="(todo, index) in todos">
							{{index+1}} - {{todo.text}} is of age {{ todo.age}} .
						</li>
					</ul>
				</div>
				<div id="rev">
					<p>{{message}}</p>
					<button v-on:click="reverseM" class="spaceAround">reverse me</button>
				</div>
				<div id="modelx">
					<p>{{message}}</p>
					<input v-model="message" type="name" name="Name" class="spaceAround">
				</div>
				<div id="cssCl">
					<p>Type any color form blue, red, green and black</p>
					<input v-on:input="cssClass = $event.target.value" type="text" name="" class="spaceAround">
					<p v-bind:class="cssClass">{{ cssClass }}</p>
				</div>
				<!-- End -->
			</div>
	    	<!--  -->
	    </div>
	    <div class="col-md-4 grey">ssssssssssssssssssssssssffffffffffff</div>
	    
	  </div>
	</div>
	<div id="showx" >
		
	</div>
	<div id="showx">
		<button v-on:click="show = !show" class="spaceAround">click me!!!</button>
		<!-- <input v-on:click="show = !show" type="" name=""> -->
		<p v-if="show">Show if Ture </p>
		<p v-else>show If else</p>
	</div>
</body>
<script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
<script src="script.js" type="text/javascript"></script>
</html>