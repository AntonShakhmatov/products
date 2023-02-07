const showEditProfile = () => `
<div>
    <h2>Change products fields</h2>
    <i class="task-desc">Zmenit pole u produktu</i>
    <div class="method">
        <span class="method-post">POST</span><b>/change</b>
    </div>
    <div class="desc-block desc-block-header header-param">
    <h3>Headers:</h3>
    <p>Authorization:<span>*</span>Bearer &#60;token&#62;</p>
    </div>
    <div class="desc-block request-block">
        <h3>Request:</h3>
        <b>1. Upravit pole produktu</b>    
        <div class="desc-block desc-block-header">
        <h3>Body:</h3>
        <div class="header-param">
        <h4>"id": zadejte id produktu, ktery chcete upravit.</h4>
        </div>
        <code>
        {
            "uuid": 123
        }
        </code> 
        </div>
        <h4>zadejte pole, ktere chcete upravit.</h4>
        <code>
        {
            "name": "Xbox",
            "url": "www.xbox.cz",
            "price" 13490
        }
        </code> 
        </div>
    </div>

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
    </div>`;
