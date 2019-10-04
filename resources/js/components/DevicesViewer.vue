<template>
    <div class="bg-gray-100 min-h-full w-full p-8 flex flex-col">
        <div class="flex justify-center mb-8">
            <input v-model="host" type="url" class="w-1/2 text-center rounded py-1 px-2 tracking-wider shadow border focus:border-gray-500">
        </div>
        <div class="flex justify-around items-top mb-8">
            <div class="flex flex-col items-center">
                <p class="text-xl font-sans">iPhone 8 Plus</p>
                <div class="marvel-device iphone8plus black" style="zoom: 0.8;">
                    <div class="top-bar"></div>
                    <div class="sleep"></div>
                    <div class="volume"></div>
                    <div class="camera"></div>
                    <div class="sensor"></div>
                    <div class="speaker"></div>
                    <div class="screen">
                        <iframe ref="if1" class="w-full h-full bg-white" id="iframe1" :src="host"></iframe>
                    </div>
                    <div class="home"></div>
                    <div class="bottom-bar"></div>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <p class="text-xl font-sans mb-3">Nexus 5</p>
                <div class="marvel-device nexus5">
                    <div class="top-bar"></div>
                    <div class="sleep"></div>
                    <div class="volume"></div>
                    <div class="camera"></div>
                    <div class="screen">
                        <iframe ref="if2" class="w-full h-full" id="iframe2" :src="host"></iframe>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex flex-col items-center">
            <p class="text-xl font-sans mb-4">MacBook Pro</p>
            <div class="marvel-device macbook">
                <div class="top-bar"></div>
                <div class="camera"></div>
                <div class="screen">
                    <iframe ref="if3" class="w-full h-full" id="iframe3" :src="host"></iframe>
                </div>
                <div class="bottom-bar"></div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "DevicesViewer",
        props: {
            hostname: String
        },
        data() {
            return {
                host: this.hostname
            };
        },
        updated: function () {
            this.$nextTick(function () {
                // Code that will run only after the
                // entire view has been re-rendered
                this.$refs.if1.onload = function() {
                    const frame1 = document.getElementById("iframe1").contentWindow;
                    const frame2 = document.getElementById("iframe2").contentWindow;
                    const frame3 = document.getElementById("iframe3").contentWindow;

                    frame1.onscroll = function(){
                        frame2.scrollTo(frame1.scrollX, frame1.scrollY);
                        frame3.scrollTo(frame1.scrollX, frame1.scrollY);
                    };
                    frame2.onscroll = function(){
                        frame1.scrollTo(frame2.scrollX, frame2.scrollY);
                        frame3.scrollTo(frame2.scrollX, frame2.scrollY);
                    };
                    frame3.onscroll = function(){
                        frame1.scrollTo(frame3.scrollX, frame3.scrollY);
                        frame2.scrollTo(frame3.scrollX, frame3.scrollY);
                    };
                };
                this.$refs.if2.onload = function() {
                    const frame1 = document.getElementById("iframe1").contentWindow;
                    const frame2 = document.getElementById("iframe2").contentWindow;
                    const frame3 = document.getElementById("iframe3").contentWindow;

                    frame1.onscroll = function(){
                        frame2.scrollTo(frame1.scrollX, frame1.scrollY);
                        frame3.scrollTo(frame1.scrollX, frame1.scrollY);
                    };
                    frame2.onscroll = function(){
                        frame1.scrollTo(frame2.scrollX, frame2.scrollY);
                        frame3.scrollTo(frame2.scrollX, frame2.scrollY);
                    };
                    frame3.onscroll = function(){
                        frame1.scrollTo(frame3.scrollX, frame3.scrollY);
                        frame2.scrollTo(frame3.scrollX, frame3.scrollY);
                    };
                };
                this.$refs.if3.onload = function() {
                    const frame1 = document.getElementById("iframe1").contentWindow;
                    const frame2 = document.getElementById("iframe2").contentWindow;
                    const frame3 = document.getElementById("iframe3").contentWindow;

                    frame1.onscroll = function(){
                        frame2.scrollTo(frame1.scrollX, frame1.scrollY);
                        frame3.scrollTo(frame1.scrollX, frame1.scrollY);
                    };
                    frame2.onscroll = function(){
                        frame1.scrollTo(frame2.scrollX, frame2.scrollY);
                        frame3.scrollTo(frame2.scrollX, frame2.scrollY);
                    };
                    frame3.onscroll = function(){
                        frame1.scrollTo(frame3.scrollX, frame3.scrollY);
                        frame2.scrollTo(frame3.scrollX, frame3.scrollY);
                    };
                };
            });
        },
        mounted() {
            window.onload = function() {
                const frame1 = document.getElementById("iframe1").contentWindow;
                const frame2 = document.getElementById("iframe2").contentWindow;
                const frame3 = document.getElementById("iframe3").contentWindow;

                frame1.onscroll = function(){
                    frame2.scrollTo(frame1.scrollX, frame1.scrollY);
                    frame3.scrollTo(frame1.scrollX, frame1.scrollY);
                };
                frame2.onscroll = function(){
                    frame1.scrollTo(frame2.scrollX, frame2.scrollY);
                    frame3.scrollTo(frame2.scrollX, frame2.scrollY);
                };
                frame3.onscroll = function(){
                    frame1.scrollTo(frame3.scrollX, frame3.scrollY);
                    frame2.scrollTo(frame3.scrollX, frame3.scrollY);
                };
            }
        }
    }
</script>

<style scoped>
    textarea:focus, input:focus{
        outline: none;
    }
</style>
