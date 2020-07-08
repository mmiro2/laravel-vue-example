<template>

<form @submit="formSubmit">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" v-model="fields.name" placeholder="Name...">
<div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" v-model="fields.email" placeholder="Email...">
        </div>
<div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" v-model="fields.phone"  placeholder="Phone...">
<div v-if="errors && errors.phone" class="text-danger">{{ errors.phone[0] }}</div>
        </div>
    </div>
    <div class="form-group row">
        <label for="message" class="col-sm-2 col-form-label">Message</label>
        <div class="col-sm-10">
<textarea id="message" class="form-control mb-2" v-model="fields.message" placeholder="Message..." ></textarea>
<div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary btn-block">Send</button>
        </div>
    </div>
</form>

</template>

<script>
export default {
  data() {
    return {
      fields: {},
      errors: {},
    }
  },
  methods: {

    formSubmit(e) {
	e.preventDefault();
      this.errors = {};
      axios.post('http://www.stalkdog.com/laravel-vue-example/api/savecontact', this.fields).then(response => {
        alert('Message sent!'+JSON.stringify(response));
      }).catch(error => {
        if (error.response.status === 422) {
          this.errors = error.response.data.errors || {};
        }
      });
    },
  },
}
</script>
