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
				{ text:"one6", age:20},
				{ text:"one1", age:22},
				{ text:"one9", age:29},
				{ text:"one7", age:27},
				{ text:"one5", age:24},
				{ text:"one6", age:21},
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
	var modelx = new Vue({
		el: "#modelx",
		data: {
			message: "In the Model box text"
		}
	})
	var cssCl = new Vue({
		el: "#cssCl",
		data: {
			cssClass: ''
		}
	})
	var showx = new Vue({
		el:  "#showx",
		data: {
			show: true
		}
	})