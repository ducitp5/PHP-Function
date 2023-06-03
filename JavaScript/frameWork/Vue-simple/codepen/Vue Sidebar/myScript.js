/*
Zap Slideout - Vue Component

This is our component definition. It tells Vue to look for our template, which is the little snippet of HTML that will be used for our component. Every time we use our component in HTML as <zap-slideout>, this template gets plopped into our page, which makes it reusable without pasting it everywhere! */

Vue.component('zap-slideout', {
    template: '#zap-slideout',
    data: () => ({
        openerText: 'Open',
        isOpen: false,
        menu: [ 'Home', 'Work', 'Contact' ],
        smallMenu: [ 'Tips', 'Resources', 'Shenanigans' ]
    }),
    methods: {
        open() {
            this.openerText = 'Close';
            this.isOpen = true;
        },
        close() {
            this.openerText = 'Open';
            this.isOpen = false;
        },
        toggle() {
            if (this.isOpen) {
                this.close();
            } else {
                this.open();
            }
        }
    }
});

/*
Start the engines...

Vue.js has to be started in order for your components to work in your page. Passing 'body' to the `el` property tells Vue it should keep track of everything inside our <body> tag. In this case, everything inside CodePen's HTML panel could be considered our page body.
*/

let app = new Vue({
    el: 'body'
});