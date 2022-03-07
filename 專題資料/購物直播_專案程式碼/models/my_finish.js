const mongoose = require('mongoose')

const db = mongoose.connection
db.on('error', console.error.bind(console, 'error：'))
db.once('open', (callback) => {
  console.log('DB Success 03')
})

const classSchema = new mongoose.Schema({
    productname: String,
    moneyId: Number,
    buyername: String,
    sellername:String,
    count: Number,
    testsum: Number,
})

const finishModel = mongoose.model('newfinish ', classSchema)

module.exports = finishModel