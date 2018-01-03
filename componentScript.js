var data = {
	counter:0
}

Vue.component('count', {
	template: '<button v-on:click="counter = counter + 1">{{counter}}</button>',
	data: function() {
		return data
	}
})

new Vue({
	el: '#example'
})