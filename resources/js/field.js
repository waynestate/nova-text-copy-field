import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
    app.component('index-text-copy', IndexField)
    app.component('detail-text-copy', DetailField)
    app.component('form-text-copy', FormField)
})
