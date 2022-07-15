// Main script
// Get HTML elements
const tableThead = document.querySelector('#table-thead')

// Methods
const TableHeading = (arr, el, upperCase = true) => {
  el.innerHTML = arr.map( head => {
    return `
      <th nowrap scope="col" class="text-sm font-medium text-gray-800 px-6 py-4 text-left">
        ${ upperCase ? head.toUpperCase() : head.toLowerCase() }
      </th>
    ` 
  }).join('')
}

// Render all components
window.addEventListener('load', () => {

  const headings = ['project name', 'client', 'project leader', 'start date', 'end date', 'progress', 'action']
  TableHeading(headings, tableThead)
})
