// Initial Handshake
console.log('Script: LOADED!');

// Initialize containers
const liveCoding = document.getElementById('live-coding');
const exercise = [];
let message = '';

// EXERCISE 1: 
message = `EX1 - ResultEx1: `;
exercise.push(message);


const app = new Vue({
    el: '#app',

    data: {
        // Results
        exercisesVue:  [],
        loading: false
    }, 

    methods: {
        // API methods


        // Results in DOM Methods
        addResult(message) {
            if (message === undefined || message.trim().length <= 0) return;
            // console.log('DEBUG - Adding message', message);
            this.exercisesVue.push(message.trim());
        }
    },


    mounted() {
        // TEST APP 
        /*
        this.addResult('Test 1');
        this.addResult();
        this.addResult('');
        this.addResult('       ');
        this.addResult('Test 2');
        this.addResult('Test 3');
        console.log('DEBUG - results', this.emails);
        this.getEmailAPI();
        */ 
        //this.getEmailAPI(100);

        this.getEmailAPI_singlePromise(10);
    }
});






// RESULTS
for (let i = 0; i < exercise.length; i++) {
    const result = document.createElement('p');
    result.classList.add('result');
    result.innerHTML = exercise[i];
    liveCoding.append(result);
}
 