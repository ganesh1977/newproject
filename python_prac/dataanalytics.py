import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt
from pympler.tracker import SummaryTracker

tracker = SummaryTracker()
# Load the dataset
df = pd.read_csv('LatestItemMasterr.csv')


#df['ITEM_NAME'] = str(df['ITEM_NAME'])

# Drop non-numeric columns like ITEM_NAME before computing correlation
numeric_df = df.select_dtypes(include=['string','number'])

# Create the heatmap
sns.heatmap(numeric_df.corr(), annot=True, cmap='coolwarm', fmt=".4f")
plt.title("Correlation Matrix of Numeric Columns")
plt.show()
tracker.print_diff()
