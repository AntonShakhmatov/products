const showLogout = () => `
<div>
    <h2>Add product</h2>
    <i class="task-desc">Tady je mozne pridat produkty.</i>
    <div class="method">
    <span class="method-get">POST</span><b>/add</b>
    </div>
    <div class="desc-block desc-block-header header-param">
        <h3>Headers:</h3>
        <p>Authorization:<span>*</span>Bearer &#60;token&#62;</p>
    </div>
    <div class="desc-block response-block">
        <h3>Response:</h3>
        <b>1. Get users</b> 
        <h4 class="status-header">Status:</h4><i class="status status-success">200 Success</i>
        <code>
        {
            "name": "Sony",
            "url": "www.playstation.cz",
            "price": 12790
        }
        </code>  
    <b>2. Authentication failed</b>
    <h4 class="status-header">Status:</h4><i class="status status-unsuccess">401 Unauthorized</i> 
    <code>
        {
            "message": "Unauthorized"
        {
    </code>
    <b>3. Invalid type error</b>
    <h4 class="status-header">Status:</h4><i class="status status-unsuccess">409 Invalid type</i> 
    <code>
        {
            "message": "Invalid type"
        {
    </code>
    <b>4. Post data error</b>
    <h4 class="status-header">Status:</h4><i class="status status-unsuccess">403 Forbiden</i> 
    <code>
        {
            "message": "Forbiden"
        {
    </code>
    <b>5. Product is existing</b>
    <h4 class="status-header">Status:</h4><i class="status status-unsuccess">303 Already existing product</i> 
    <code>
        {
            "message": "Already exist"
        {
    </code>
    </div>
</div>
`;