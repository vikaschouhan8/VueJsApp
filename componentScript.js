var data = {
	counter:0
}

Vue.component('count', {
	template: '<button v-on:click="counter = counter + 1">{{counter}}</button>',
	// it will update all at one click
	// data: function() {
	// 	return data
	// }
	// it will update onle the button whic his being clicked
	data: function() {
		return {
			counter:0
		}
	}
})

new Vue({
	el: '#example'
})