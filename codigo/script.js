const { response } = require('express')
const express = require('express')
const app = express()

app.get('/disponiveis', (res, req)=>{
    return response.json({ message: "Ok"})
})

app.listen(3333, () =>{
    console.log("Server On")
})