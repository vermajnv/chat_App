<template>
	<div class="chat-composer">
		<input type="text" name="message" placeholder="start typing here..." v-model="messageText" @keyup.enter="sendMessage">
		<button class="btn btn-primary" @click="sendMessage">Send</button>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				messageText : ''
			}
		},
		methods : {
			sendMessage() {
				this.$emit('messagesent', {
					message : this.messageText,
					user : {
						name :  $('#navbarDropdown').text()
					},
					});
				console.log(this.messageText);
				this.messageText = '';
			}
		}
	}
</script>

<style media="screen">
	.chat-composer {
		display: flex;
	}
	.chat-composer input {
		flex: 1 auto;
	}
</style>
