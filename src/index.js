// Modules
import TableHeading from './components/TableHeading.js'
import TableBody from './components/TableBody.js'
import config from './config.js'

// Get HTML Elements
const modalEdit = document.querySelector('#modal-edit')
const modalDelete = document.querySelector('#modal-delete')

// Get form inputs
const key = document.querySelector('[name=id]')
const name = document.querySelector('[name=name]')
const client = document.querySelector('[name=client]')
const leader = document.querySelector('[name=leader]')
const startDate = document.querySelector('[name=start_date]')
const endDate = document.querySelector('[name=end_date]')
const progress = document.querySelector('[name=progress]')
const progressLabel = document.querySelector('[for=progress]')

// Key for delete
const keyDelete = document.querySelector('[name=id-delete]')

window.addEventListener('load', () => {

  // Get HTML elements
  const tableThead = document.querySelector('#table-thead')
  const tableBody = document.querySelector('#table-tbody')
  const formEdit = document.querySelector('#form-edit')
  const formDelete = document.querySelector('#form-delete')

  // prepare before render
  const headings = ['no', 'project name', 'client', 'project leader', 'start date', 'end date', 'progress', 'action']

  // Render all components
  TableHeading(headings, tableThead)
  TableBody(tableBody)
  
  // Setup endpoint form action
  formEdit.setAttribute('action', config.endpoint + '/update.php')
  formDelete.setAttribute('action', config.endpoint + '/delete.php')

  // Progress input handler
  progress.addEventListener('input', e => {
    progressLabel.innerHTML = 'Current Progress : ' + e.target.value + '%'
  })
})

// Event Click handler
window.addEventListener('click', e => {
  const target = e.target
  
  // get dataset [role]
  if ( target.dataset.role ) {
    let role = target.dataset.role
    const data = target.dataset
    // handler
    switch ( role ) {
      case "modal-edit:trigger" : 
        modalEdit.classList.replace('hidden', 'block')
        
        // Auto Fill Form
        key.value = data.resId
        name.value = data.resName
        client.value = data.resClient
        leader.value = data.resLeader
        startDate.value = formaterDate(data.resStartDate)
        endDate.value = formaterDate(data.resEndDate)
        progress.value = data.resProgress
        progressLabel.innerHTML = 'Current progress : ' + data.resProgress + '%'
        break
      case "modal-edit:close" :
        modalEdit.classList.replace('block', 'hidden')
        break
      case "modal-delete:trigger" :
        modalDelete.classList.replace('hidden', 'block')
        keyDelete.value = data.resId
        break
      case "modal-delete:close" :
        modalDelete.classList.replace('block', 'hidden')
        break;
    }
  }
})

const formaterDate = date => date.split('/').reverse().join('-')
