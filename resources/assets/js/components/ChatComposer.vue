<template lang="html">
  <div>
   <div class="chat-composer">
    <input type="text" placeholder="Start typing..." v-model="messageText" @keyup.enter="sendMessage"> 
    <button class="btn btn-primary" @click="sendMessage">Send</button> 
   </div>   
  </div> 
</template>
<script>
  export default {
    data() {
      return {
        messageText: ''
      }
    },
    methods: {
      sendMessage() {
        // emit uses whatever string you pass as the first parameter as the event rective trigger
          this.$emit('messagesent', {
            message: this.messageText,
            author: "John Doe",
          });
        console.log(this.messageText);
        this.messageText = "";
      }
    }

  }
</script>
<style lang="css">
  .chat-composer {
    display: flex;
  }

  .chat-composer input {
    flex: 1 auto;
  }

  .chat-composer button {
    border-radius : 0;
  }
</style>
