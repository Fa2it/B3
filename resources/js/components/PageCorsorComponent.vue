<template>
  <div id="page-scroll-reduce"  v-on:click="handleScroll" class="mx-auto" style="border-radius: 50%; border: 2px solid #FFF; cursor: pointer; width:3rem; height:3rem">
      <div class="d-flex justify-content-center">
          <i class="fas fa-angle-down" style="font-size:3rem;color:#FFF"></i>
      </div>
  </div>
</template>

<script>
    export default {
        methods: {
              handleScroll (event) {
                // Any code to be executed when the window is scrolled
                event.target.parentNode.parentNode.parentNode.style.visibility = 'hidden';
                event.target.parentNode.parentNode.parentNode.style.height = '0';
                event.target.parentNode.parentNode.parentNode.style.WebkitTransition = 'height 2s';
                event.target.parentNode.parentNode.parentNode.style.transition = 'height 2s';
                var hoso = document.getElementById('hide-on-scroll-one')
                var hosoh = document.getElementById('hide-on-scroll-oneh')

                    hoso.style.height="0";
                    hoso.style.visibility = 'hidden';
                    hoso.style.WebkitTransition = 'height 2s';
                    hoso.style.transition = 'height 2s';

                    hosoh.style.fontSize="2rem";
                    hosoh.style.WebkitTransition = 'fontSize 3s';
                    hosoh.style.transition = 'fontSize 3s';
                    console.log( "Scrolling ..... " )
              },
              created () {
                console.log("created ....")
                window.addEventListener('scroll', this.handleScroll);
              },
              destroyed () {
                window.removeEventListener('scroll', this.handleScroll);
              }
        },
        mounted() {

        }
    }
</script>
