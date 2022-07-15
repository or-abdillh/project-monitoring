// Modules
import TableHeading from './components/TableHeading.js'

// Get HTML elements
const tableThead = document.querySelector('#table-thead')

// Methods
// Render all components
window.addEventListener('load', () => {

  const headings = ['project name', 'client', 'project leader', 'start date', 'end date', 'progress', 'action']
  TableHeading(headings, tableThead)
})
