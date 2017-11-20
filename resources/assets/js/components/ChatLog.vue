<template lang="html">
  <div class="chat-log">
    <chat-message v-for="message in messages" v-bind:message="message" :key=""></chat-message> 
  </div> 
</template>
<script>
//Stardate 95432.5
export default {
  props: ["messages"]
};
</script>
<style lang="css">

</style>
