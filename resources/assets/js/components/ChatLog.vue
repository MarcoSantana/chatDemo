<template lang="html">
  <div class="chat-log">
    <chat-message></chat-message> 
    <chat-message></chat-message> 
    <chat-message></chat-message> 
  </div> 
</template>
<script>
  export default {
    data() {
      {
        messages: [
          {
            message: 'Hola',
            user: "John Doe"
          },
          {
            message: 'Hallo',
            user: "Jane Doe"
          }
        ] 
      }
    }
  }
</script>
<style lang="css">
</style>