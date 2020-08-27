console.log("cargo");
const userPro = new Vue({
	el: '#userPro',

	data(){
		return {
			titulo: "Nombre usuario",
			dataU: '{{ user_profile_a}}'
		}
	},

	delimiters: ['${', '}'],

	methods: {
		nextExp: function() {
			//roteate bio exp
		}
	}
});