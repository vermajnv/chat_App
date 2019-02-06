<template>
   <div class="chat-message">
      <p>{{message.message}}</p>
      <small>{{message.author}}</small>
   </div>
</template>

<script>
   export default {

      props: ['message']
   }
</script>

<style>

</style>
