// Modules
import TableHeading from './components/TableHeading.js'
import TableBody from './components/TableBody.js'

window.addEventListener('load', () => {

  // Get HTML elements
  const tableThead = document.querySelector('#table-thead')
  const tableBody = document.querySelector('#table-tbody')

  // prepare before render
  const headings = ['no', 'project name', 'client', 'project leader', 'start date', 'end date', 'progress', 'action']

  // Render all components
  TableHeading(headings, tableThead)
  TableBody(tableBody)

})
