<!DOCTYPE html>
<html>
<head>
	<title>Vue.js Project Setup - Vue.js 2.0 Fundamentals</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="app">
		<button v-on:click="message= 'changed the message'">Change message</button>
		<button v-on:click="changeMessage">Change message with the help of a function</button>
		<h1>{{message}}</h1>
		<h1 v-text="message"></h1>
		<new></new>
	</div>
<!-- 	<div id="app-2">
		<button v-if="show">
			app-2 Id show
		</button>

	</div> -->
	<div id='list'>
		<h2>v-for loop example</h2>
		<ul>
			<li v-for="(todo, index) in todos">
				{{index+1}} - {{todo.text}} is of age {{ todo.age}}.
			</li>
		</ul>
		<h2>Component example with props</h2>
		<ol>
			<item-list v-for="item in todos" v-bind:item="item">{{item.text}}</item-list>
		</ol>
	</div>
	<div id="rev">
		<p>{{message}}</p>
		<button v-on:click="reverseM">reverse me</button>
	</div>
	<div id="modelx">
		<p>{{message}}</p>
		<input v-model="message" type="name" name="Name" >
	</div>
	<div id="cssCl">
		<h2>Css style dynamic height example</h2>
		<p>Type any color form blue, red, green and black</p>
		<input v-on:input="cssClass = $event.target.value" type="text" name="">
		<p v-bind:class="cssClass">{{ cssClass }}</p>
	</div>

	
	<div id="showx">
		<button v-on:click="show = !show">click me!!!</button>
		<!-- <input v-on:click="show = !show" type="" name=""> -->
		<p v-if="show">Show if Ture </p>
		<p v-else>show If else</p>
	</div>
</body>
<script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
<script src="script.js" type="text/javascript"></script>
</html>