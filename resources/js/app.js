const { default: axios } = require('axios');

require('./bootstrap');


// document.getElementById('getAccessToken').addEventListener('click', (event) => {
//     event.preventDefault()
//     axios.post('/get-token', {})
//     .then((response) => {
//         console.log(response.data);
//         document.getElementById('access_token').innerHTML = response.data
//     })
//     .catch((error) => {
//         console.log(error);
//     })
// });


// document.getElementById('registerURLS').addEventListener('click', (event) => {
//     event.preventDefault()

//     axios.post('register-urls', {})
//     .then((response) => {
//         if(response.data.ResponseDescription){
//             document.getElementById('response').innerHTML = response.data.ResponseDescription
//         } else {
//             document.getElementById('response').innerHTML = response.data.errorMessage
//         }
//         console.log(response.data);
//     })
//     .catch((error) => {
//         console.log(error);
//     })

// });


// document.getElementById('simulate').addEventListener('click', (event) => {
//     event.preventDefault()

//     const requestBody = {
//         amount: document.getElementById('amount').value,
//         account: document.getElementById('account').value
//     }

//     axios.post('/simulate', requestBody)
//     .then((response) => {
//         if(response.data.ResponseDescription){
//             document.getElementById('c2b_response').innerHTML = response.data.ResponseDescription
//         } else {
//             document.getElementById('c2b_response').innerHTML = response.data.errorMessage
//         }
//     })
//     .catch((error) => {
//         console.log(error);
//     })
// })

// document.getElementById('stkpush').addEventListener('click', (event) => {
//     event.preventDefault()

//     const requestBody = {
//         amount: document.getElementById('amount').value,
//         account: document.getElementById('account').value,
//         phone: document.getElementById('phone').value
//     }

//     axios.post('stkpush', requestBody)
//     .then((response) => {
//         if(response.data.ResponseDescription){
//             document.getElementById('c2b_response').innerHTML = response.data.ResponseDescription
//         } else {
//             document.getElementById('c2b_response').innerHTML = response.data.errorMessage
//         }
//     })
//     .catch((error) => {
//         console.log(error);
//     })
// })

document.getElementById('simulateb2c').addEventListener('click', (event) => {
    event.preventDefault()

    const requestBody = {
        amount: document.getElementById('amount').value,
        phone: document.getElementById('phone').value,
        occasion: document.getElementById('occasion').value,
        remarks: document.getElementById('remarks').value
    }

    axios.post('/simulateb2c', requestBody)
    .then((response) => {
        if(response.data.Result){
            document.getElementById('c2b_response').innerHTML = response.data.Result.ResultDesc
        } else {
            document.getElementById('c2b_response').innerHTML = response.data.errorMessage
        }
    })
    .catch((error) => {
        console.log(error);
    })
})