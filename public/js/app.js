new Vue({
	el: '#app',
	methods: {

		openModalSupportTI(){
			this.$refs.modalSupportTI.show();
		},

		closeModalSupportTI(){
			this.$refs.modalSupportTI.hide();
		},

		openModalCameras(){
			this.$refs.modalCameras.show();
		},

		closeModalCameras(){
			this.$refs.modalCameras.hide();
		},

		testVue(){
			console.log('Vue funcionando correctamente');
		},
	}

});