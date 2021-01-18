

from flask import Flask
from flask_navbar import Nav
from flask_navbar.elements import *

nav = Nav()

# registers the "top" menubar
nav.register_element('top', Navbar(
View('Widgits, Inc.', 'index'),
NavUl(
View('Our Mission', 'about', icon='fa fa-comment'),
Subgroup(
'Products',
View('Wg240-Series', 'products', product='wg240'),
View('Wg250-Series', 'products', product='wg250'),
Separator(),
Text('Discontinued Products'),
View('Wg10X', 'products', product='wg10x'),
),
Link('Tech Support', 'http://techsupport.invalid/widgits_inc', icon='fa fa-home'),
navbar_right=False
),
Search('/search', navbar_right=True, icon='fa fa-search', btn_text='Go',
input_placeholder='Search...', input_name='q', input_id='q', ),
navbar_inverse=True,
navbar_fixed='top',
logo_filename='logo.png'
))

app = Flask(__name__)
# [...] (view definitions)

# If using flask_bootstrap, nav must init first
nav.init_app(app)
