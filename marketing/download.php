<? $page_title = "Rapid Prototyping and Building Framework from ZURB" ?>
<?php include("includes/_header.php"); ?>
  
  <header>
    <div class="row">
      <div class="twelve columns">
        <h1>Download Foundation</h1>
        <h4>There are three ways to get Foundation. Pick the one that's right for you.</h4>
      </div>
    </div>
  </header>
  
  <section id="mainContent">
    
    <div class="row">
      <div class="four columns">
        <h4>Default CSS</h4>
        <p>This version of Foundation includes smart defaults and doesn't require Sass or any other tools. Everything in this is minified, so you would use this to build on top of Foundation.</p>
        <p><a href="#" class="radius button">Download Foundation CSS</a></p>
      </div>
      <div class="four columns">
        <h4>Custom CSS</h4>
        <p>You can customize your build of Foundation below to include or remove certain elements, as well as to define the size of columns, colors, font size and more.</p>
        <p><a href="#customizeFoundation" class="secondary radius button">Customize Foundation</a></p>
      </div>
      <div class="four columns">
        <h4>Sass + Compass</h4>
        <p>Foundation is built using SCSS, and you can work with it in the same way. To get Foundation using Sass and Compass, check out the instructions on the Install documentation page.</p>
        <p><a href="docs/installing.php" class="secondary radius button">Install Foundation SCSS</a></p>
      </div>
    </div>
    
    <div class="row">
      <div class="twelve columns">
        <hr />
        
        <h3 id="customizeFoundation">Customize Foundation</h3>
        <form id="customBuild">
          
          <div class="row">
            <div class="six columns">
              <h5>The Grid</h5>
              <div class="row">
                <div class="four columns">
                  <label for="columnCount">Number of Columns</label>
                  <input type="text" value="12" placeholder="#" id="columnCount" />
                </div>
                <div class="four columns">
                  <label for="columnGutter">Column Gutter (px)</label>
                  <input type="text" value="30" placeholder="#" id="columnGutter" />
                </div>
                <div class="four columns">
                  <label for="rowWidth">Max-Width (px)</label>
                  <input type="text" value="940" placeholder="#" id="rowWidth" />
                </div>
              </div>
              
              <h5>Colors</h5>
              
              <div class="row">
                <div class="six columns">
                  <label for="mainColor">Main Link Color</label>
                  <div class="row collapse">
                    <div class="two columns">
                      <span class="prefix">#</span>
                    </div>
                    <div class="ten columns">
                      <input type="text" value="2ba6cb" placeholder="Hex" id="mainColor" />
                    </div>
                  </div>
                </div>
                <div class="six columns">
                  <label for="secondaryColor">Secondary Color</label>
                  <div class="row collapse">
                    <div class="two columns">
                      <span class="prefix">#</span>
                    </div>
                    <div class="ten columns">
                      <input type="text" value="e9e9e9" placeholder="Hex" id="secondaryColor" />
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="six columns">
                  <label for="alertColor">Alert Color</label>
                  <div class="row collapse">
                    <div class="two columns">
                      <span class="prefix">#</span>
                    </div>
                    <div class="ten columns">
                      <input type="text" value="c60f13" placeholder="Hex" id="alertColor" />
                    </div>
                  </div>
                </div>
                <div class="six columns">
                  <label for="successColor">Success Color</label>
                  <div class="row collapse">
                    <div class="two columns">
                      <span class="prefix">#</span>
                    </div>
                    <div class="ten columns">
                      <input type="text" value="5da423" placeholder="Hex" id="successColor" />
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="six columns">
                  <label for="textColor">Text Color</label>
                  <div class="row collapse">
                    <div class="two columns">
                      <span class="prefix">#</span>
                    </div>
                    <div class="ten columns">
                      <input type="text" value="222222" placeholder="Hex" id="textColor" />
                    </div>
                  </div>
                </div>
                <div class="six columns">
                  <label for="highlightColor">Highlight Color</label>
                  <div class="row collapse">
                    <div class="two columns">
                      <span class="prefix">#</span>
                    </div>
                    <div class="ten columns">
                      <input type="text" value="ffff99" placeholder="Hex" id="highlightColor" />
                    </div>
                  </div>
                </div>
              </div>
              
              
              <h5>Typography</h5>
              <div class="row">
                <div class="four columns">
                  <label for="baseFontSize">Base Font Size</label>
                  <div class="row collapse">
                    <div class="nine columns">
                      <input type="text" value="14" placeholder="px" id="baseFont" />
                    </div>
                    <div class="three columns">
                      <span class="postfix">px</span>
                    </div>
                  </div>
                </div>
                <div class="four columns">
                  <label for="importantNumber">Important Number</label>
                  <div class="row collapse">
                    <div class="nine columns">
                      <input type="text" value="44" placeholder="px" id="importantNumber" />
                    </div>
                    <div class="three columns">
                      <span class="postfix">px</span>
                    </div>
                  </div>
                </div>
                <div class="four columns">
                  <label for="fontRatio">Ratio</label>
                  <select>
                    <option selected value="golden">Golden Ratio</option>
                    <option value="fifth">Perfect Fifth</option>
                  </select>
                </div>
              </div>
              
            </div>
          </div>
          
          <input type="submit" class="radius button" value="Download Custom Build" />
        </form>
      </div>
    </div>
    
    <div class="row">
      <div class="twelve columns">
        <p class="disclaimer">Used to Foundation 2 and want to keep on truckin'? No problem. <a href="files/foundation-2.2.1.zip">Download it.</a></p>
      </div>
    </div>
      
  </section>  
  	
<?php include("includes/_footer.php");  ?>
