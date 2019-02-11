<template>
   <div class="">
      <div class="chat-log">
         <chat-message v-for="message in messages" :message="message" :key="message.id"></chat-message>

      </div>
   </div>
</template>

<script>
   export default {
      props : ['messages'],
   }
</script>

<style media="screen">
.chat-message:nth-of-type(odd) {
   background-color: lightgray;
}
</style>
