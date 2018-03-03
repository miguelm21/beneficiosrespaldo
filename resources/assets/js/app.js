new Vue({
	el: '#crud',
	created: function(){
		this.getKeeps();
	},
	data: {
		keeps: [],
		newKeep: '',
		fillKeep: {'id': '', 'keep': ''},
		errors: [],
	},
	methods: {
		getKeeps: function(){
			var urlKeeps = 'task';
			axios.get(urlKeeps).then(response => {
				this.keeps = response.data
			});
		},
		deleteKeep: function(keep){
			var url = 'task/' + keep.id;
			axios.delete(url).then(response =>{
				this.getKeeps();
				toastr.success('Eliminado correctamente');
			});
		},
		createKeep: function(){
			var url = 'task';
			axios.post(url, { 
				keep: this.newKeep
			}).then(response => {
				this.getKeeps();
				this.newKeep = '';
				this.errors = [];
				$('#create').modal('hide');
				toastr.success('Nueva Tarea creada con exito');
			}).catch(error => {
				this.errors = error.response.data
			});
		},
		editKeep: function(keep) {
			this.fillKeep.id = keep.id;
			this.fillKeep.keep = keep.keep;

			$('#edit').modal('show');
		},
		updateKeep: function(id) {
			var url = 'task/' + id;
			axios.put(url, this.fillKeep).then(response => {
				this.getKeeps();
				this.fillKeep = { 'id': '', 'keep': '' };
				this.errors = [];
				$('#edit').modal('hide');
				toastr.success('Tarea actualizada con exito');
			}).catch(error => {
				this.errors = error.response.data
			});
		}
	}
});