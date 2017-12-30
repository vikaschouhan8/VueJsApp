<!DOCTYPE html>
<html>
<head>
	<title>Vue.js Project Setup - Vue.js 2.0 Fundamentals</title>
</head>
<body>
	<div id="app">
		<button v-on:click="message= 'changed the message'">Change message</button>
		<button v-on:click="changeMessage">Change message</button>
		<h1>{{message}}</h1>
		<h1 v-text="message"></h1>
	</div>
	<div id="app-2">
		<button v-if="show">app-2 Id show</button>
	</div>
	<div id='list'>
		<ol>
			<li v-for="todo in todos">
				{{todo.text}} having {{index}}
			</li>
		</ol>
	</div>
	<div id="rev">
		<p>{{message}}</p>
		<button v-on:click="reverseM">reverse me</button>
	</div>
</body>
<script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
<script>
	var v = new Vue({
		el: '#app',
		data: {
			message: 'welcome to the Walkover'
		},
		methods: {
			changeMessage() {
				this.message = "changeMessage function called!!!!!"
			}
		}
	})
	var v2 = new Vue({
		el: 'app-2',
		data:{
			show: true
		}
	})
	var list = new Vue({
		el: '#list',
		data: {
			todos: [
				{ text:"one6"},
				{ text:"one1"},
				{ text:"one9"},
				{ text:"one7"},
				{ text:"one5"},
				{ text:"one6"},
			]
		}
	})
	var rev = new Vue({
		el: "#rev",
		data: {
			message: "hey reverse me!!"
		},
		methods: {
			reverseM: function(){
				this.message = this.message.split('').reverse().join('')
			}
		}
	})
</script>
</html>