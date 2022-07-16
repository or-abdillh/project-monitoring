// Create table heading
//
const TableHeading = (arr, el, upperCase = true) => {
  el.innerHTML = arr.map( head => {
    return `
      <th nowrap scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
        ${ upperCase ? head.toUpperCase() : head.toLowerCase() }
      </th>
    ` 
  }).join('')
}

export default TableHeading
