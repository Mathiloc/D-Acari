# Reimporting necessary libraries due to session reset
from graphviz import Digraph
import shutil

# Crear los diagramas nuevamente

# Diagrama UML de arquitectura en tres capas
uml_diagram = Digraph('Arquitectura en Tres Capas - UML', filename='/mnt/data/arquitectura_tres_capas_uml', format='png')
uml_diagram.attr(rankdir='TB', size='8')

# Definir nodos para las tres capas
uml_diagram.node('CapaPresentacion', 'Capa de Presentación', shape='folder')
uml_diagram.node('CapaNegocio', 'Capa de Negocio', shape='folder')
uml_diagram.node('CapaDatos', 'Capa de Datos', shape='cylinder')

# Agregar clases para cada capa
# Capa de Presentación
uml_diagram.node('InterfazUsuario', 'InterfazUsuario\n(formulario pedidos)', shape='box')
uml_diagram.edge('CapaPresentacion', 'InterfazUsuario')

# Capa de Negocio
uml_diagram.node('ControladorPedido', 'ControladorPedido', shape='component')
uml_diagram.node('ServicioPedido', 'ServicioPedido', shape='component')
uml_diagram.edge('CapaNegocio', 'ControladorPedido')
uml_diagram.edge('ControladorPedido', 'ServicioPedido')

# Capa de Datos
uml_diagram.node('PedidoDAO', 'PedidoDAO', shape='box')
uml_diagram.edge('CapaDatos', 'PedidoDAO')

# Enlaces entre las capas
uml_diagram.edge('InterfazUsuario', 'ControladorPedido', label='envía solicitud de pedido')
uml_diagram.edge('ServicioPedido', 'PedidoDAO', label='consulta base de datos')
uml_diagram.edge('PedidoDAO', 'ServicioPedido', label='respuesta de disponibilidad')
uml_diagram.edge('ServicioPedido', 'ControladorPedido', label='envía resultado')
uml_diagram.edge('ControladorPedido', 'InterfazUsuario', label='muestra resultado en vista')

# Renderizar el diagrama UML
uml_diagram.render()

# Diagrama de flujo del proceso de pedido
flow_diagram = Digraph('Diagrama de Flujo del Proceso de Pedido', filename='/mnt/data/flujo_proceso_pedido', format='png')
flow_diagram.attr(rankdir='TB', size='8')

# Definir nodos para cada paso del proceso de pedido
flow_diagram.node('Start', 'Inicio', shape='ellipse')
flow_diagram.node('FormularioPedido', 'Formulario de Pedido\n(Capa de Presentación)', shape='parallelogram')
flow_diagram.node('ControladorPedido', 'ControladorPedido\n(Capa de Negocio)', shape='rectangle')
flow_diagram.node('ServicioPedido', 'ServicioPedido\n(Capa de Negocio)', shape='rectangle')
flow_diagram.node('ConsultaDAO', 'Consulta en PedidoDAO\n(Capa de Datos)', shape='diamond')
flow_diagram.node('ResultadoBD', 'Resultado de BD\n(Disponibilidad/Precio)', shape='parallelogram')
flow_diagram.node('MostrarResultado', 'Mostrar Resultado en Interfaz\n(Capa de Presentación)', shape='parallelogram')
flow_diagram.node('End', 'Fin', shape='ellipse')

# Conectar los nodos
flow_diagram.edge('Start', 'FormularioPedido', label='Inicio Pedido')
flow_diagram.edge('FormularioPedido', 'ControladorPedido', label='Enviar Solicitud')
flow_diagram.edge('ControladorPedido', 'ServicioPedido', label='Procesa Solicitud')
flow_diagram.edge('ServicioPedido', 'ConsultaDAO', label='Consulta en BD')
flow_diagram.edge('ConsultaDAO', 'ResultadoBD', label='Resultado BD')
flow_diagram.edge('ResultadoBD', 'ServicioPedido', label='Devuelve Datos')
flow_diagram.edge('ServicioPedido', 'ControladorPedido', label='Envía Resultado')
flow_diagram.edge('ControladorPedido', 'MostrarResultado', label='Muestra en Interfaz')
flow_diagram.edge('MostrarResultado', 'End', label='Fin del Proceso')

# Renderizar el diagrama de flujo
flow_diagram.render()

# Comprimir los archivos generados en un archivo ZIP
zip_path = '/mnt/data/diagramas_arquitectura_tres_capas.zip'
with shutil.ZipFile(zip_path, 'w') as zipf:
    zipf.write('/mnt/data/arquitectura_tres_capas_uml.png', arcname='arquitectura_tres_capas_uml.png')
    zipf.write('/mnt/data/flujo_proceso_pedido.png', arcname='flujo_proceso_pedido.png')

zip_path
